/*var key = {
    lv: "All likely voters surveyed",
    age_18_39: "18-39",
    age_40_64: "40-64",
    age_o65: "65+",
    sex_m: "Men",
    sex_f: "Women",
    income_u30: "Under $30,000",
    income_30_50: "$30K-$50K",
    income_50_100: "$50K-$100K",
    income_100_200: "$100K-$200K",
    income_o200: "$200K+",
    income_ns: "Not sure",
    race_w: "White",
    race_b: "Black",
    race_h: "Hispanic",
    race_o: "Other",
    edu_ahs: "Attended high school",
    edu_ghs: "Graduated high school",
    edu_ac: "Attended college",
    edu_gc: "Graduated college",
    edu_gs: "Graduate school",
    married_n: "No",
    married_y: "Yes",
    children_n: "No",
    children_y: "Yes",
    party_r: "Republicans",
    party_d: "Democrats",
    party_o: "Other",
    ideology_c: "Conservative",
    ideology_l: "Liberal",
    ideology_m: "Moderate",
    ideology_ns: "Not sure",
    issue_ts: "Taxes and spending",
    issue_ej: "Economy and jobs",
    issue_e: "Education",
    issue_t: "Transportation",
    issue_ib: "Immigration and border security",
    issue_h: "Health care",
    issue_s: "Social issues",
    issue_o: "Other",
    issue_ns: "Not sure"
};

*/

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

var data_url = 'data/topline.json';
var $out_div = $("#poll_output");

// set global template variable
_.templateSettings.variable = "template_data";

// fetch template for main div
var template = _.template($( "script.template" ).html());

var getPct = function(fl) {
    return (fl * 100).toFixed(0);
};

var should_sort = function(i, ls_of_arrays) {
    var no_sort = [5, 6, 7, 8];
    if (_.indexOf(no_sort, +i, true) < 0) {
        return _.sortBy(ls_of_arrays, function(m,n) { return _.values(m)[0]; } ).reverse();
    } else {
        return ls_of_arrays;
    }
};

var init = function(data) {

    $.getJSON(data).success(function(d) {
        var swapData = function(party) {
            var data_out = {};
            if (party === "dem") {
                data_out.data = d.dem;
                data_out.party = "dem";
                data_out.hed = "Likely Democratic voters";
                data_out.barcolor = "steelblue";
                data_out.chat = "<div class='row'><div class='col-xs-12 col-md-6' style='margin-bottom:10px;'>Responses from " + demo.dem.total + " likely Democratic voters in Texas.</div><div class='col-xs-12 col-md-6'><a href='#' class='btn btn-danger btn-sm' role='button' id='to_gop'>See survey results from likely Republican voters.</a></div></div>";

                $out_div.html(template(data_out));

                $("#to_gop").on('click', function(e) {
                    e.preventDefault();
                    swapData("gop");
                });
            } else {
                data_out.data = d.gop;
                data_out.party = "gop";
                data_out.hed = "Likely Republican voters";
                data_out.barcolor = "#d9534f";
                data_out.chat = "<div class='row'><div class='col-xs-12 col-md-6' style='margin-bottom:10px;'>Responses from " + demo.gop.total + " likely Republican voters in Texas.</div><div class='col-xs-12 col-md-6'><a href='#' class='btn btn-primary btn-sm' role='button' id='to_dem' style='background-color: steelblue;'>See survey results from likely Democratic voters.</a></div></div>";

                $out_div.html(template(data_out));

                $("#to_dem").on('click', function(e) {
                    e.preventDefault();
                    swapData("dem");
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



/*

data

{
    "demo": {
        "gender": {
            "women": 0.4,
            "men": 0.8
        },
        "age": {

        },
        "race": {

        },
        "party": {

        }
    },
    "questions": [
        {""}
    ]
}



*/
