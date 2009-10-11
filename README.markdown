# CakePHP Cycle Helper Plugin

This plugin provides an easy way to include Mark Gandolfo's [Cycle CSS Helper](http://github.com/markgandolfo/cakephp_cycle_css) in your CakePHP application.

## Installation

Add as a git submodule

    git submodule add git://github.com/nathanaelkane/cakephp-cycle-helper-plugin.git app/plugins/cycle_helper/

Alternatively, you can manually download the plugin and place the files in /app/plugins/cycle_helper/

### Setup in CakePHP

Setup your app\_controller.php (eg. /app/app\_controller.php)

    <?php
    class AppController extends Controller {
        public $helpers = array('CycleHelper.Cycle');
    }
    ?>

####Use in your view:

    <table>
        <? foreach(array(1,2,3) as $item) : ?>
        <tr class="<?= $cycle->css() ?>">
            <td><?= $item ?></td>
           </tr>
        <? endforeach ?>
    </table>

####Will output:

    <table>
        <tr class="odd">
            <td>1</td>
        </tr>
        <tr class="even">
            <td>2</td>
        </tr>
        <tr class="odd">
            <td>3</td>
        </tr>
    </table>

####Alternatively, you can specify custom class values:

    <table>
        <? foreach(array(1,2,3) as $item) : ?>
        <tr <?= $cycle->css(array('foo', 'bar'), true) ?>>
            <td><?= $item ?></td>
        </tr>
        <? endforeach ?>
    </table>

####Will output:

    <table>
        <tr class="foo">
            <td>1</td>
        </tr>
        <tr class="bar">
            <td>2</td>
        </tr>
        <tr class="foo">
            <td>3</td>
        </tr>
    </table>
