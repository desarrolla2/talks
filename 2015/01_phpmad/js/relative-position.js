$(function () {

    var $step = $('.step');
    var w = $step.width() + 2;
    var h = $step.height();

    /**
     * @TOOO: rotate-x
     * @TOOO: rotate-y
     */

    $step.each(function (index) {

        var $current = $(this);
        var $previous = $($step[index - 1]);

        if (index == 0) {
            setData($current, 'x', 0);
            setData($current, 'y', 0);
            setData($current, 'scale', 1);
            return;
        }

        fixProperty($current, $previous, 'scale');

        fixPosition($current, $previous, 'x', w);
        fixPosition($current, $previous, 'y', h);

        /**
         * @param JQuery $current
         * @param JQuery $previous
         * @param string key
         */
        function fixProperty($current, $previous, key) {
            var current = getData($current, key);
            var previous = getData($previous, key);
            setData($current, 'original-' + key, current);

            if (current == 0) {
                setData($current, key, previous);
                return;
            }
        }

        /**
         * @param JQuery $current
         * @param JQuery $previous
         * @param string key
         * @param int modifier
         */
        function fixPosition($current, $previous, key, modifier) {

            var current = getData($current, key);
            var previous = getData($previous, key);
            var scale = greater(getData($current, 'scale'), getData($previous, 'scale'));

            setDataOriginal($current, key, current);

            if (current == 0) {
                setData($current, key, previous);
                return;
            }
            if (current > 0) {
                setData($current, key, previous + current + modifier * scale);
                return;
            }
            if (current < 0) {
                setData($current, key, previous + current - modifier * scale);
                return;
            }
        }

        /**
         * @param JQuery $item
         * @param string key
         * @returns int
         */
        function getData($item, key) {
            var value = $item.attr('data-' + key);
            if (value == undefined) {
                return 0;
            }

            return parseInt(value);
        }

        /**
         * @param JQuery $item
         * @param string key
         * @param int value
         */
        function setData($item, key, value) {
            $item.attr('data-' + key, value);
        }

        /**
         * @param JQuery $item
         * @param string key
         * @param int value
         */
        function setDataOriginal($item, key, value) {
            if (getData($item, 'original-' + key)) {
                return;
            }
            $item.attr('data-original-' + key, value);
        }

        /**
         * @param int a
         * @param int b
         * @returns int
         */
        function greater(a, b) {
            return a > b ? a : b;
        }
    });
});