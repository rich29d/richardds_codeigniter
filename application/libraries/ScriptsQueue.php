<?php defined('BASEPATH') or exit('No direct access allowed');

/**
 * Este script tem como finalidade enfileirar folhas de estilo e scripts javascript
 * para que estes sejam inseridos na view de forma padrão e no 
 */
class ScriptsQueue {


    protected $CI;

    // We'll use a constructor, as you can't directly call a function
    // from a property definition.
    public function __construct()
    {
        // Assign the CodeIgniter super-object
        $this->CI =& get_instance();
    }

  static $stylesheets = array();
  static $scripts = array();
  static $scriptDeclarations = array();
  static $styleDeclarations = array();
  
  /**
   * Adiciona uma folha de estilos à fila.
   * 
   * @param string $handle
   *    Nome pelo qual a folha de estilos será identificada na fila. Caso seja fornecido
   *    um nome já presente na fila, o registro antigo será substituído pelo novo.
   * @param string $version
   *    Versão da folha de estilos.
   * @param string $pos
   *    Local onde a folha de estilo deve ser adicionada no documento.
   */
  function BASE_CSS($handle, $version = '', $pos = 'top') {
    self::$stylesheets[$handle] = array(
        'handle'    => $handle,
        'href'      => base_url("assets/css/$handle.css"),
        'version'   => $version,
        'position'  => $pos);
  }
  
  /**
   * Adiciona um script à fila.
   * 
   * @param string $handle Nome pelo qual o script será identificado na fila. Caso seja 
   *    fornecido um nome já presente na fila, o registro antigo será substituído 
   *    pelo novo.
   * @param string $version Versão do script.
   * @param bool $pos Local onde o script deve ser adicionado no documento.
   */
  function BASE_JS($handle, $version = '', $pos = 'bottom') {
    self::$scripts[$handle] = array(
        'handle'    => $handle,
        'src'       => base_url("assets/js/$handle.js"),
        'version'   => $version,
        'position'  => $pos);
  }

    /**
     * Adiciona um script à fila.
     *
     * @param string $handle Nome pelo qual o script será identificado na fila. Caso seja
     *    fornecido um nome já presente na fila, o registro antigo será substituído
     *    pelo novo.
     * @param string $version Versão do script.
     * @param bool $pos Local onde o script deve ser adicionado no documento.
     */
    function BASE_API($handle, $version = '', $pos = 'bottom') {
        self::$scripts[$handle] = array(
            'handle'    => $handle,
            'src'       => base_url("assets/api/$handle.js"),
            'version'   => $version,
            'position'  => $pos);
    }

    /**
     * Adiciona um script à fila.
     *
     * @param string $handle Nome pelo qual o script será identificado na fila. Caso seja
     *    fornecido um nome já presente na fila, o registro antigo será substituído
     *    pelo novo.
     * @param string $version Versão do script.
     * @param bool $pos Local onde o script deve ser adicionado no documento.
     */
    function BASE_IMG($handle, $version = '', $pos = 'bottom') {
        self::$scripts[$handle] = array(
            'handle'    => $handle,
            'src'       => base_url("assets/api/$handle.js"),
            'version'   => $version,
            'position'  => $pos);
    }

  /**
   * Adiciona uma declaração de estilo avulsa à fila de impressão.
   * 
   * @param string $value Declaração de estilo avulsa.
   */
  function declareStyle($value) {
    self::$styleDeclarations[] = $value;
  }

  /**
   * Adiciona uma declaração de script avulsa à fila de impressão.
   * 
   * @param string $value Declaração de script avulsa.
   */
  function declareScript($value) {
    self::$scriptDeclarations[] = $value;
  }
  
  /**
   * Imprime as folhas de estilo enfileiradas.
   * 
   * @param string $position Indica a posição dos elementos que devem ser impressos. 
   *    Por exemplo, se 'top' for fornecido, apenas os elementos enfileirados com 
   *    posição 'top' serão impressos. Caso nenhum valor seja fornecido, todos os 
   *    elementos enfileirados serão impressos.
   */
  function printEnqueuedCSS($position = '') {
    foreach(self::$stylesheets as &$css) {
      if((!empty($position) && $position != $css['position']) || empty($css)) {
        continue;
      }
      
      if(!empty($css['version'])) {
        $css['href'] .= "?v={$css['version']}";
      }
      
      $tag = '<link rel="stylesheet" ';
      $tag .= "href=\"{$css['href']}\" ";
      $tag .= "id=\"{$css['handle']}-css\" ";
      $tag .= "/>";
      
      print $tag;
      $css = null;
    }
  }
  
  /**
   * Imprime os scripts enfileirados.
   * 
   * @param string $position Indica a posição dos elementos que devem ser impressos. 
   *    Por exemplo, se 'top' for fornecido, apenas os elementos enfileirados com 
   *    posição 'top' serão impressos. Caso nenhum valor seja fornecido, todos os 
   *    elementos enfileirados serão impressos.
   */
  function printEnqueuedJS($position = '') {
    foreach(self::$scripts as &$js) {
      if((!empty($position) && $js['position'] != $position) || empty($js)) {
        continue;
      }
      
      if(!empty($js['version'])) {
        $js['src'] .= "?v={$js['version']}";
      }
      
      $tag = '<script type="text/javascript" ';
      $tag .= "src=\"{$js['src']}\" ";
      $tag .= "id=\"{$js['handle']}-js\"";
      $tag .= "></script>";
      
      print $tag;
      $js = null;
    }
  }

  /**
   * Imprime as declarações de estilo avulsas no documento.
   */
  function printCSSDeclarations() {
    print "<style>";

    foreach(self::$styleDeclarations as $declaration) {
      print $declaration;
    }

    print "</style>";
  }

  /**
   * Imprime as declarações de script avulsas no documento.
   */
  function printJSDeclarations() {
    print '<script type="text/javascript">';

    foreach(self::$scriptDeclarations as $declaration) {
      print $declaration;
      
      if(substr($declaration, -1) != ';') {
        print ';';
      }
    }

    print '</script>';
  }
  
  /**
   * Limpa as filas de folhas de estilo e scripts.
   */
  function clearQueue() {
    self::$scripts = array();
    self::$stylesheets = array();
  }

  /**
   * Limpa as filas de declarações avulsas.
   */
  function clearDeclarations() {
    self::$scriptDeclarations = array();
    self::$styleDeclarations = array();
  }
}