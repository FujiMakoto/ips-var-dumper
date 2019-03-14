<?php
/**
 * @brief		VarDumper Application Class
 * @author		<a href='https://dev.taiga.sh/ips/var-dumper'>Makoto</a>
 * @copyright	(c) 2019 Makoto
 * @package		Invision Community
 * @subpackage	VarDumper
 * @since		14 Mar 2019
 * @version		
 */
 
namespace IPS\vardumper;
use Symfony\Component\VarDumper\VarDumper;

require_once __DIR__ . '/sources/vendor/autoload.php';

/**
 * VarDumper Application Class
 */
class _Application extends \IPS\Application
{
	protected function get__icon()
    {
        return 'code';
    }
}

/* eval'd so we can put into global namespace */
eval( '
if (!function_exists(\'dump\')) {
    /**
     * @author Nicolas Grekas <p@tchwork.com>
     */
    function dump($var, ...$moreVars)
    {
        VarDumper::dump($var);

        foreach ($moreVars as $v) {
            VarDumper::dump($v);
        }

        if (1 < func_num_args()) {
            return func_get_args();
        }

        return $var;
    }
}

if (!function_exists(\'dd\')) {
    function dd(...$vars)
    {
        foreach ($vars as $v) {
            VarDumper::dump($v);
        }

        die(1);
    }
}
');