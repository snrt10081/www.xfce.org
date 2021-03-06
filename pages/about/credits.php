<?php

define ('ATSIGN', '@');
define ('DOTSIGN', '.');

include ('lib/translators.php');

$head['title'] = R_('Credits');

function print_credits($people)
{
        $last = end ($people);
        foreach ($people as $person => $mail)
        {
                echo $person.' &lt;'.mungify_mail($mail).'&gt;';

                if ($mail != $last)
                        echo "<br />\n";
        }
}

function print_translator_credits()
{
  global $translators;

  foreach ($translators as $language => $people)
  {
    echo "<dt>$language</dt>\n<dd>";

    $last = end ($people);
    foreach ($people as $person => $mail)
    {
      echo $person.' &lt;'.mungify_mail($mail).'&gt;';

      if ($mail != $last)
        echo "<br />\n";
    }

    echo "</dd>\n";
  }
}
?>

<h1><?php echo $head['title'] ?></h1>

<p>
  <?php E_('A large number of people contributed to the Xfce project. Although more people contributed to the project then the ones list below, we\'d like to say:') ?>

  <b><?php E_('Thanks to all who helped making this software available!') ?></b>
</p>

<h2 id="core"><?php E_('Core developers')?></h2>
<?php
        print_credits (array (
                'Andrzej Radecki' => 'ndrwrdck'.ATSIGN.'gmail.com',
                'Eric Koegel' => 'eric'.ATSIGN.'xfce.org',
                'Harald Judt' => 'hjudt'.ATSIGN.'xfce.org',
                'Landry Breuil' => 'landry'.ATSIGN.'xfce.org',
                'Nick Schermer' => 'nick'.ATSIGN.'xfce.org',
                'Olivier Fourdan' => 'fourdan'.ATSIGN.'xfce.org',
                'Sean Davis' => 'bluesabre'.ATSIGN.'xfce.org',
                'Simon Steinbeiß' => 'simon'.ATSIGN.'xfce.org',
                'Peter de Ridder' => 'peter'.ATSIGN.'xfce.org'));
?>

<h2 id="active"><?php E_('Active contributors')?></h2>
<?php
        print_credits (array (
                'Guido Berhoerster' => 'guido+xfce'.ATSIGN.'berhoerster.name',
                'Jannis Pohlmann' => 'jannis'.ATSIGN.'xfce.org',
                'Mike Massonnet' => 'mmassonnet'.ATSIGN.'gmail.com',
                'Silvio Knizek' => 'killermoehre'.ATSIGN.'gmx.net',
                'Steve Dodier-Lazaro' => 'sidi'.ATSIGN.'xfce.org',
                'Yves-Alexis Perez' => 'corsac'.ATSIGN.'debian.org'));
?>

<h2 id="servers"><?php E_('Servers maintained by')?></h2>
<?php
        print_credits (array (
                'Jean-François Wauthy' => 'pollux'.ATSIGN.'xfce.org',
                'Nick Schermer' => 'nick'.ATSIGN.'xfce.org',
                'Samuel Verstraete' => 'elangelo'.ATSIGN.'xfce.org'));
?>

<h2 id="goodies"><?php E_('Goodies supervision')?></h2>
<?php
        print_credits (array (
                'Harald Judt' => 'hjudt'.ATSIGN.'xfce.org',
                'Landry Breuil' => 'landry'.ATSIGN.'xfce.org'));
?>

<h2 id="translation"><?php E_('Translations supervision')?></h2>
<?php
        print_credits (array (
                'Mike Massonnet' => 'mmassonnet'.ATSIGN.'gmail.com',
                'Nick Schermer' => 'nick'.ATSIGN.'xfce.org'));
?>

<h2 id="translators"><?php E_('Translators')?></h2>
<dl>
<?php   print_translator_credits(); ?>
</dl>

<h2 id="previous"><?php E_('Previous contributors')?></h2>
<?php
        print_credits (array (
                'Ali Abdallah' => 'aliov'.ATSIGN.'xfce.org',
                'Auke Kok' => 'sofar'.ATSIGN.'foo-projects.org',
                'Benedikt Meurer' => 'benny'.ATSIGN.'xfce.org',
                'Bernhard Walle' => 'bernhard.walle'.ATSIGN.'gmx.de',
                'Biju Chacko' => 'botsie'.ATSIGN.'xfce.org',
                'Brian J. Tarricone' => 'kelnos'.ATSIGN.'xfce.org',
                'Craig Betts' => 'craig.betts'.ATSIGN.'dfrc.nasa.gov',
                'Daichi Kawahata' => 'daichi'.ATSIGN.'xfce.org',
                'Danny Milosavljevic' => 'dannym'.ATSIGN.'xfce.org',
                'Darren Salt' => 'linux'.ATSIGN.'youmustbejoking.demon.co.uk',
                'David Mohr' => 'squisher'.ATSIGN.'xfce.org',
                'Edscott Wilson García' => 'edscott'.ATSIGN.'xfce.org',
                'Eduard Roccatello' => 'eduard'.ATSIGN.'xfce.org',
                'Ejvend Nielsen' => 'prophet'.ATSIGN.'sphere-x.net',
                'Enrico Tröger' => 'enrico.troeger'.ATSIGN.'uvena.de',
                'Erik Touve' => 'etouve'.ATSIGN.'earthlink.net',
                'Erik Harrison' => 'erikharrison'.ATSIGN.'xfce.org',
                'François Le Clainche' => 'fleclainche'.ATSIGN.'wanadoo.fr',
                'Jasper Huijsmans' => 'jasper'.ATSIGN.'xfce.org',
                'Jérôme Guelfucci' => 'jeromeg'.ATSIGN.'xfce.org',
                'Jean-François Wauthy' => 'pollux'.ATSIGN.'fce.org',
                'Jens Guballa' => 'j.guballa'.ATSIGN.'t-online.de',
                'Jens Luedicke' => 'jens'.ATSIGN.'irs-net.com',
                'Joakim Andreasson' => 'joakim.andreasson'.ATSIGN.'gmx.net',
                'Lionel Le Folgoc' => 'mrpouit'.ATSIGN.'gmail.com',
                'Karsten Luetkewitz' => 'phrep'.ATSIGN.'plskthx.org',
                'Martin Loschwitz' => 'madkiss'.ATSIGN.'debian.org',
                'Maximilian Schleiss' => 'maximilian'.ATSIGN.'xfce.org',
                'Michael Mosier' => 'michael'.ATSIGN.'spyonit.com',
                'Mickaël Graf' => 'korbinus'.ATSIGN.'xfce.org',
                'Pau Rul·lan Ferragut' => 'paurullan'.ATSIGN.'bulma.net',
                'Stephan Arts' => 'stephan'.ATSIGN.'xfce.org',
                'Thomas Leonard' => 'tal00r'.ATSIGN.'ecs.soton.ac.uk',
                'Tobias Henle' => 'tobias'.ATSIGN.'page23.de',
                'Xavier Maillard' => 'zedek'.ATSIGN.'fxgsproject.org'));
?>


