# EmptyPStripper - a plug in for Expression Engine 2

## Installaion

To install this plug in, make a directory by the name of "emptypstripper" and place this file inside of it. 

Place the "emptypstripper" directory in the "/system/expressionengine/thirdparty/" directory in your Expression Engine installation.

## Usage

There is one function called 'stripMyPsPlease' to the 'emptypstripper' plug in class. 

To use it, wrap it around the content you want to be stripped of empty P tags, like this:

<pre>
{exp:emptypstripper:stripMyPsPlease}{wygym_content}{/exp:emptypstripper:stripMyPsPlease}
</pre>

Voilà. 

There will be no empty &lt;p&gt; tag pairs anymore.