<?php
//Object class
class MyFileObject{
    //Private property
    private $filename;
    //construct
    function __construct($f)
    {
        $this->filename = $f;
    }
    //Getter
    function file_get_filename(){
        return $this->filename;
    }
    //save
    public function save($read)
    {
        $filename = $this->file_get_filename();
        $cur = file_get_contents($filename);
        $cur .= "<br>" . $read . " : " . date( 'Y-m-d H:i:s' );
        file_put_contents( $filename, $cur );
    }
    //load
    public function load()
    {
        $filename = $this->file_get_filename();
        $content = file_get_contents( $filename );
        echo $content;
    }

}