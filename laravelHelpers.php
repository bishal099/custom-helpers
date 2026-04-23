//squish helper removes white spaces of a string

use Illuminate\Support\Str;

$input = '  hello     laravel! ';
$output = $output = Str::squish($input);
dd($output);
//output: hello laravel!

$input = '  hello     php! ';
$output = Str::of($input)->replace('php', 'laravel')->squish();
dd($output);
// output: hello laravel!

