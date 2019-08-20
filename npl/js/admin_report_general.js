var totalX = 0;
var totalY = [];
var totalXY = 0;
$.each($("table tbody tr"), function(i, v) {
    var tdLen = $(v).find("td").length;

    $(v).find("td").each(function(i2, v2) {
        var random = Math.floor(Math.random() * (20 - 0 + 1)) + 0;

        if (tdLen == (i2+1)) {
            $(v2).html(totalX);
            totalXY += totalX;
            totalX = 0;

            if ($("table tbody tr").length == i+1) {
                $("table tfoot tr td:eq("+ i2 +")").html(totalXY);
            }

            return;
        } else if (i2 == 0) {
            return;
        }

        $(v2).html(random);
        totalX += random;

        if (typeof totalY[i2] !== "undefined") {
            totalY[i2] += random;
        } else {
            totalY[i2] = random;
        }

        if ($("table tbody tr").length == i+1) {
            $("table tfoot tr td:eq("+ i2 +")").html(totalY[i2]);
        }
    });
});