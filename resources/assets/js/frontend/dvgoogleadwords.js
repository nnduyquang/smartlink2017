$(document).ready(function () {
    if ($("#hieuSuat").length) {
        var waypoint = new Waypoint({
            element: document.getElementById('hieuSuat'),
            handler: function () {
                var options1 = {
                    useEasing: true,
                    useGrouping: false,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    suffix: '+'
                };
                var options2 = {
                    useEasing: true,
                    useGrouping: false,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    suffix: '%'
                };
                var numHs1 = new CountUp("hs1", 0, 500, 0, 1.5, options1);
                var numHs2 = new CountUp("hs2", 0, 1000, 0, 2, options1);
                var numHs3 = new CountUp("hs3", 0, 100, 0, 2.2, options2);
                var numHs4 = new CountUp("hs4", 0, 500, 0, 2, options1);
                numHs1.start();
                numHs2.start();
                numHs3.start();
                numHs4.start();

                waypoint.disable();
            },
            offset: '85%'
        })
    }
});