<?php 

class Webtrek {

    public static function display($arr) {
        $count = 0;
        foreach ($arr as $item) { 
            if ($item !== '' && $item !== null) {
                $count++;
            }
            if ($count == 0) {
                return 'd-none';
            } 
        }
    }

    public static function if_exists( $mb, $key, $tag = null, $css = null) {
        $c = ($css !== null) ? "class='{$css}'" : null;
        
        if ($tag !== null){
            if ($tag == 'img') {
                $a = "<{$tag} {$c}";
                $b = " />";
                if (array_key_exists($key, $mb) && $mb[$key] !== '') { 
                    return "{$a} src='{$mb[$key]}' {$b}";
                } else {
                    return "{$a} src='https://via.placeholder.com/750x550' {$b}";
                }
            } else {
                $a = "<{$tag} {$c}>";
                $b = "</{$tag}>";
            }
        } else {
            $a = null;
            $b = null;
        }
        if (array_key_exists($key, $mb) && $mb[$key] !== '') { 
            return "{$a}{$mb[$key]}{$b}";
        }
    }
}