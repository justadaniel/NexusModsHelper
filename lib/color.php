<?php

function HexToRgb($hex) {
    $hex = str_replace("#", "", $hex);

    if(strlen($hex) == 3) {
        $r = hexdec(substr($hex,0,1).substr($hex,0,1));
        $g = hexdec(substr($hex,1,1).substr($hex,1,1));
        $b = hexdec(substr($hex,2,1).substr($hex,2,1));
    } else {
        $r = hexdec(substr($hex,0,2));
        $g = hexdec(substr($hex,2,2));
        $b = hexdec(substr($hex,4,2));
    }
    $rgb = array($r, $g, $b);
    //return implode(",", $rgb); // returns the rgb values separated by commas
    return $rgb; // returns an array with the rgb values
}


function RgbToHex($rgb) {
    $hex = "#";
    $hex .= str_pad(dechex($rgb[0]), 2, "0", STR_PAD_LEFT);
    $hex .= str_pad(dechex($rgb[1]), 2, "0", STR_PAD_LEFT);
    $hex .= str_pad(dechex($rgb[2]), 2, "0", STR_PAD_LEFT);

    return $hex; // returns the hex value including the number sign (#)
}

function HexToRgba($hex, $alpha) {
    $rgb = HexToRgb($hex);
    $rgb = array($r, $g, $b, $alpha);
}

function HexToRgbCSS($hex) {
    $rgb = HexToRgb($hex);
    $r = $rgb[0];
    $g = $rgb[1];
    $b = $rgb[2];
    
    return "rgb($r, $g, $b)";
}

function HexToRgbaCSS($hex, $alpha) {
    $rgb = HexToRgb($hex);
    $r = $rgb[0];
    $g = $rgb[1];
    $b = $rgb[2];
    
    return "rgba($r, $g, $b, $alpha)";
}

function ColorBrightness($hex, $percent) {
	// Work out if hash given
	$hash = '';
	if (stristr($hex,'#')) {
		$hex = str_replace('#','',$hex);
		$hash = '#';
	}
	/// HEX TO RGB
	$rgb = array(hexdec(substr($hex,0,2)), hexdec(substr($hex,2,2)), hexdec(substr($hex,4,2)));
	//// CALCULATE 
	for ($i=0; $i<3; $i++) {
		// See if brighter or darker
		if ($percent > 0) {
			// Lighter
			$rgb[$i] = round($rgb[$i] * $percent) + round(255 * (1-$percent));
		} else {
			// Darker
			$positivePercent = $percent - ($percent*2);
			$rgb[$i] = round($rgb[$i] * $positivePercent) + round(0 * (1-$positivePercent));
		}
		// In case rounding up causes us to go to 256
		if ($rgb[$i] > 255) {
			$rgb[$i] = 255;
		}
	}
	//// RBG to Hex
	$hex = '';
	for($i=0; $i < 3; $i++) {
		// Convert the decimal digit to hex
		$hexDigit = dechex($rgb[$i]);
		// Add a leading zero if necessary
		if(strlen($hexDigit) == 1) {
		$hexDigit = "0" . $hexDigit;
		}
		// Append to the hex string
		$hex .= $hexDigit;
	}
	return $hash.$hex;
}

function RgbToHsl($RGB) {
    $r = 0xFF & ($RGB >> 0x10);
    $g = 0xFF & ($RGB >> 0x8);
    $b = 0xFF & $RGB;

    $r = ((float)$r) / 255.0;
    $g = ((float)$g) / 255.0;
    $b = ((float)$b) / 255.0;

    $maxC = max($r, $g, $b);
    $minC = min($r, $g, $b);

    $l = ($maxC + $minC) / 2.0;

    if($maxC == $minC) {
        $s = 0;
        $h = 0;
    } else {
        if($l < .5) {
            $s = ($maxC - $minC) / ($maxC + $minC);
        } else {
            $s = ($maxC - $minC) / (2.0 - $maxC - $minC);
        }
        
        if($r == $maxC)
            $h = ($g - $b) / ($maxC - $minC);
        if($g == $maxC)
            $h = 2.0 + ($b - $r) / ($maxC - $minC);
        if($b == $maxC)
            $h = 4.0 + ($r - $g) / ($maxC - $minC);

        $h = $h / 6.0; 
    }

    $h = (int)round(255.0 * $h);
    $s = (int)round(255.0 * $s);
    $l = (int)round(255.0 * $l);

    return (object) Array('hue' => $h, 'saturation' => $s, 'lightness' => $l);
}

function HexToHsl($hex) {
    $rgb = HexToRgb($hex);
    $r = $rgb[0];
    $g = $rgb[1];
    $b = $rgb[2];
    
    $hsl = RgbToHsl($b + ($g << 0x8) + ($r << 0x10));

    return $hsl;
}

function IsColorLight($color) {
    $hsl = HexToHsl($color);
    if($hsl->lightness >= 125) {
        return true;    
    } else {
        return false;    
    }
}

?>