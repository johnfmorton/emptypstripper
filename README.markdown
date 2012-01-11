# EmptyPStripper - a plug in for Expression Engine 2

I use Pixel and Tonic's WYGWYM sometimes in my Expression Engine sites, but due to the technology behind it, I found it generated empty &lt;p&gt; pairs of tags, sometimes with a non-breaking-space in between, throughout the final HTML. That would mess up my layouts. I needed to get rid of them. 

I took my SuperGeekery Tag Stripper and did a variation of it for this purpose. It's basically just a wrapper for preg_replace function, but it does the trick for me.

## Installaion

To install this plug in, make a directory by the name of "emptypstripper" and place the file "pi.emptypstripper.php" inside of it. 

Place the "emptypstripper" directory in the "/system/expressionengine/thirdparty/" directory in your Expression Engine installation.

## Usage

There is one function called 'stripMyPsPlease' to the 'emptypstripper' plug in class. 

To use it, wrap it around the content you want to be stripped of empty P tags, like this:

<pre>
{exp:emptypstripper:stripMyPsPlease}{wygym_content}{/exp:emptypstripper:stripMyPsPlease}
</pre>

Voilà. 

There will be no empty &lt;p&gt; tag pairs anymore.