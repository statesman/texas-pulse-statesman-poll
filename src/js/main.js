var demo = {
    gop: {
        total: 620,
        women: 0.47,
        men: 0.53,
        white: 0.84,
        black: 0.12,
        other_race: 0.04,
        is_gop: 0.75,
        other_party: 0.25,
        a18_39: 0.23,
        a40_64: 0.46,
        ao65: 0.31,
        voted_yes: 0.24,
        voted_no: 0.76
    },
    dem: {
        total: 411,
        women: 0.55,
        men: 0.45,
        white: 0.54,
        black: 0.2,
        hispanic: 0.22,
        other_race: 0.04,
        is_dem: 0.89,
        other_party: 0.11,
        a18_39: 0.26,
        a40_64: 0.54,
        ao65: 0.2,
        voted_yes: 0.32,
        voted_no: 0.68
    }
};

var data_url = 'data/questions.json';
var $out_div = $("#poll_output");

_.templateSettings.variable = "template_data";

var template = _.template($( "script.template" ).html());

var getPct = function(fl) {
    return (fl * 100).toFixed(0);
};

var should_sort = function(i, ls_of_arrays, sorter) {
    var no_sort = [5, 6, 7, 8];
    if (_.indexOf(no_sort, +i, true) < 0) {
        return _.sortBy(ls_of_arrays, sorter).reverse();
    } else {
        return ls_of_arrays;
    }
};

var count_items = function(list_of_arrs, str) {
    var counter = 0;
    var keys = _.keys(list_of_arrs[0]);
    _.each(keys, function(d) {
        if (d.indexOf(str) > -1) {
            counter++;
        }
    });
    return counter;
};

var init = function(data) {

    $.getJSON(data).success(function(d) {
        var swapData = function(party) {
            var data_out = {};
            if (party === "dem") {
                data_out.data = d.dem;
                data_out.party = "dem";
                data_out.hed = "Democrats";
                data_out.barcolor = "steelblue";
                data_out.accent = "#d7e4ef";
                data_out.chat = "<div class='row' style='margin-bottom:-80px;'><div class='col-xs-12 col-md-6' style='margin-bottom:10px;'>Responses from " + demo.dem.total + " likely Democratic voters in Texas.</div><div class='col-xs-12 col-md-6'><a href='#' class='btn btn-danger btn-sm' role='button' id='to_gop'>See survey results from likely Republican voters</a></div></div>";

                $out_div.html(template(data_out));

                $("#to_gop").on('click', function(e) {
                    e.preventDefault();
                    swapData("gop");
                });

                $(".label-crosstab").on("click", function() {
                    var $t = $(this);
                    $(".label-crosstab").each(function() {
                        $(this).removeClass("label-dem")
                               .addClass("label-lite");
                    });

                    $t.addClass("label-dem");

                    var target = $t.attr('data-attr');

                    var $crosstab_tables = $t.siblings("div.crosstab_tables")
                                                  .children('div.ct_table');

                    var target_table = $crosstab_tables.filter("div." + target);

                    $crosstab_tables.hide();
                    target_table.show();
                });

            } else {
                data_out.data = d.gop;
                data_out.party = "gop";
                data_out.hed = "Republicans";
                data_out.barcolor = "#d9534f";
                data_out.accent = "#f1c0bf";
                data_out.chat = "<div class='row' style='margin-bottom:-80px;'><div class='col-xs-12 col-md-6' style='margin-bottom:10px;'>Responses from " + demo.gop.total + " likely Republican voters in Texas.</div><div class='col-xs-12 col-md-6'><a href='#' class='btn btn-primary btn-sm' role='button' id='to_dem' style='background-color: steelblue;'>See survey results from likely Democratic voters</a></div></div>";

                $out_div.html(template(data_out));

                $("#to_dem").on('click', function(e) {
                    e.preventDefault();
                    swapData("dem");
                });

                $(".label-crosstab").on("click", function() {
                    var $t = $(this);
                    $(".label-crosstab").each(function() {
                        $(this).removeClass("label-gop")
                               .addClass("label-lite");
                    });

                    $t.addClass("label-gop");

                    var target = $t.attr('data-attr');

                    var $crosstab_tables = $t.siblings("div.crosstab_tables")
                                                  .children('div.ct_table');

                    var target_table = $crosstab_tables.filter("div." + target);

                    $crosstab_tables.hide();
                    target_table.show();

                });
            }
        };

        swapData("gop");

    }).fail(function() {
        alert("Something went wrong. Try reloading the page.");
    });


};

$(document).ready(function() {
    init(data_url);
});
