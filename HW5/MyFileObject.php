<?php
class MyFileObject{
    private $filename;

    function __construct($f)
    {
        $this->filename = $f;
    }

    function file_get_filename(){
        return $this->filename;
    }

    public function save($read)
    {
        $filename = $this->file_get_filename();
        $cur = file_get_contents($filename);
        $cur .= "<br>" . $read . " : " . date( 'Y-m-d H:i:s' );
        file_put_contents( $filename, $cur );
    }
    public function load()
    {
        $filename = $this->file_get_filename();
        $content = file_get_contents( $filename );
        echo $content;
    }

}