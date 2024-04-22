<?php
    require_once 'WindowsSevenFiles.php';
    class WindowsTenFileAdapter implements IWindowsSevenFiles{

        public $filename;

        public $listFilesToShare = [];

        public function __construct(WindowsSevenFiles $filename){
            $this->filename = $filename;
        }

        public function openFile($filename){
            echo "lógica o script que fuerza la opción de conversión que viene en office de windows 10 para archivos de versiones anteriores, ";
            echo "O si no es posible convertir abre el modo compatibilidad.";

            return $this->filename->openFile($filename);
        }

        public function shareFiles($filename){
            echo "Lógica que guarda los archivos ya convertidos a la nueva versión y los comparte.";

            return $this->filename->shareFiles($filename);
        }
    }

    $filename = 'manual de usuario.docx';
    $windowsSevenFile = new WindowsSevenFiles();
    $windowsSevenFile->openFile($filename);
    $WindowsTenFileAdapter = new WindowsTenFileAdapter($windowsSevenFile);
    $WindowsTenFileAdapter->openFile($windowsSevenFile);