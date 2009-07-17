<?php
/**
 * Simple helper that takes the hassle out of alternating row colors.
 *
 * @author Mark Gandolfo
 *
 */
class CycleHelper extends Helper {

	private $cycleCount = 0;

	/**
	 * Cycles through the passed in paramters or (even, odd) by default
	 * userful for alternating row colors in a table, or similar.
	 *
	 * @author Mark Gandolfo
	 * @param Array an array of elements to alternate through
	 * @param Boolean $classTag do you want to output the class="" tag?
	 *
	 * @example
	 *
	 * <table>
	 *  <? foreach(array(1,2,3) as $item) : ?>
	 *     <tr class="<?= $cycle->css() ?>">
	 *       <td><?= $item ?></td>
	 *     </tr>
	 *  <? endforeach ?>
	 * </table>
	 *
	 * Output is as follow
	 *
	 * <table>
	 *   <tr class="odd">
	 *    <td>1</td>
	 *   </tr>
	 *   <tr class="even">
	 *     <td>2</td>
	 *   </tr>
	 *   <tr class="odd">
	 *     <td>3</td>
	 *   </tr>
	 *  </table>
	 *
	 *
	 * If you wanted to show the class tags also
	 * <table>
	 *  <? foreach(array(1,2,3) as $item) : ?>
	 *     <tr <?= $cycle->css(array('odd','even'), true) ?>>
	 *       <td><?= $item ?></td>
	 *     </tr>
	 *  <? endforeach ?>
	 * </table>
	 *
	 * Output is as follow
	 *
	 * <table>
	 *   <tr class="odd">
	 *    <td>1</td>
	 *   </tr>
	 *   <tr class="even">
	 *     <td>2</td>
	 *   </tr>
	 *   <tr class="odd">
	 *     <td>3</td>
	 *   </tr>
	 *  </table>
	 *
	 */
	public function css($options = array('odd', 'even'), $classTag = false) {
		$optionsCount = count($options) - 1;

		if($classTag) {
			$return = 'class="'. $options[$this->cycleCount]. '"';
		} else {
			$return = $options[$this->cycleCount];
		}

		if($this->cycleCount < $optionsCount) {
			$this->cycleCount++;
		} else {
			$this->cycleCount = 0;
		}

		return $return;
	}
}

