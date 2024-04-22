<?php

    class WindowsSevenFiles implements IWindowsSevenFiles{

        public $filename;
        public $listFilesToShare = [];

        public function openFile($filename){
            $this->filename = $filename;

            echo "Lógica de envio de archivos en la versión de windows 7";
        }

        public function shareFiles($filename){
            $this->filename = $filename;
            array_push($this->listFilesToShare, $filename);

            echo "Lógica de envio de archivos en versón windows 7";
        }
    }
    $filename = 'manual de usuario.docx';
    $windowsSevenFile = new WindowsSevenFiles();
    $windowsSevenFile->openFile($filename);
    $windowsSevenFile->shareFiles($filename);