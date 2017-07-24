<?php
    function varExportColor($data){
        return highlight_string("<?php\n\$data =\n" . var_export($data, true) . ";\n?>");
    }
?>