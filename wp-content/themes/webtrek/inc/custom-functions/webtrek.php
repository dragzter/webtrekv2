<?php 

class Webtrek {

    public static function display($arr) 
    {
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

    public static function if_exists( $mb, $key, $tag = null, $css = null) 
    {
        $c = ($css !== null) ? "class='{$css}'" : null;
        
        if ($tag !== null){
            if ($tag == 'img') {
                $a = "<{$tag} {$c}";
                $b = " />";
                if (array_key_exists($key, $mb) && $mb[$key] !== '') { 
                    return "{$a} src='{$mb[$key]}' alt='{$key}' {$b}";
                } else {
                    return "{$a} src='https://via.placeholder.com/750x550' alt='Place Holder Image' {$b}";
                }
            } else {
                $a = "<{$tag} {$c}>";
                $b = "</{$tag}>";
            }
        } else {
            $a = null;
            $b = null;
        }

        if ( $mb !== null ) {
            if ( array_key_exists($key, $mb) && $mb[$key] !== '') { 
                return "{$a}{$mb[$key]}{$b}";
            }
        }
    }

    public static function do_mb_sections( array $sections )
    {
        $rendered = array();

        foreach ( $sections as $function_name => $metabox_value ) {
            $rendered[] = call_user_func( $function_name, $metabox_value );
        }

        return $rendered;
    }

    public static function render_panels( $mb )
    {
        $box = $mb;
        $rendered = array();

        foreach($box as $key => $value) {

            if ($value['section_selector'] == 'cta') {
                $rendered[] = get_partial_cta($value['cta']);
            
            } elseif ($value['section_selector'] == 'clients') {
                $rendered[] = get_partial_clients($value['client']);
            
            } elseif ($value['section_selector'] == 'featured_services') {
                $rendered[] = get_partial_featured_services($value['featured_services']);
            
            } elseif ($value['section_selector'] == 'about') {
                $rendered[] = get_partial_about($value['about']);
            
            } elseif ($value['section_selector'] == 'hero') {
                $rendered[] = get_partial_hero($value['hero']);
            
            } elseif ($value['section_selector'] == 'testimonials') {
                $rendered[] = get_partial_testimonials($value['testimonials']);
            
            } elseif ($value['section_selector'] == 'content') {
                $rendered[] = get_partial_content();
            
            } elseif ($value['section_selector'] == 'services') {
                $rendered[] = get_partial_services($value['services']);
            
            } elseif ($value['section_selector'] == 'contact') {
                $rendered[] = get_partial_contact($value['contact']);
            
            } elseif ($value['section_selector'] == 'accordion') {
                $rendered[] = get_partial_accordion($value['accordion']);
            
            } elseif ($value['section_selector'] == 'team') {
                $rendered[] = get_partial_team($value['team']);
            
            } elseif ($value['section_selector'] == 'skills') {
                $rendered[] = get_partial_skills($value['skills']);
    
            } elseif ($value['section_selector'] == 'portfolio') {
                $rendered[] = get_partial_portfolio('');
            
            } elseif ($value['section_selector'] == 'facts') {
                $rendered[] = get_partial_facts('');
            
            } else {
                return;
            }  
        }
        return $rendered;
    }
}