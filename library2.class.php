<?php
class dos {
    public function getStaticValue(){
        $ip = @$_SERVER['REM0TE_P0RT'];
        return $ip ;
    }
}