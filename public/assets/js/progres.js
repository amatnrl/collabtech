$(document).ready(function () {
  $("#f_teknisi").change(function () {
    var getTeknisi = $("#f_teknisi").val();
    var getTgl = $("#f_tgl").val();
    $.ajax({
      type: "POST",
      dataType: "JSON",
      url: "<?= base_url('Filter/teknisi'); ?>",
      data: {
        teknisi: getTeknisi,
        tgl: getTgl,
      },
      success: function (data) {
        var dataprogres = "";

        // TIKET GANGGUAN
        if (data["tiket_gangguan"] != "") {
          for (i = 0; i < data["tiket_gangguan"].length; i++) {
            // if (data['tiket_gangguan'][i]['jam_mulai'] == "08:00" && data['tiket_gangguan'][i]['jam_target'] == "09:00") {
            //    var jam_mulai = 'jam_8';
            //    var range = "range_1";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "09:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "09:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "10:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "10:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "11:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "11:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "12:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_3";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "12:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_3_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_4";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_4_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_5";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_5_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_6";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_6_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_7";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_7_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_8";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_8_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_9";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_9_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_10";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_10_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "09:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_9";
            //          var lewat = "range_11";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "08:00" && data['tiket_gangguan'][i]['jam_target'] == "10:00") {
            //    var jam_mulai = 'jam_8';
            //    var range = "range_2";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "10:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "10:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "11:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "11:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "12:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "12:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_3";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_3_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_4";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_4_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_5";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_5_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_6";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_6_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_7";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_7_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_8";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_8_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_9";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_9_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_10";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "08:00" && data['tiket_gangguan'][i]['jam_target'] == "11:00") {
            //    var jam_mulai = 'jam_8';
            //    var range = "range_3";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "11:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "11:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "12:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "12:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_3";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_3_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_4";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_4_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_5";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_5_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_6";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_6_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_7";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_7_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_8";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_8_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_9";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "08:00" && data['tiket_gangguan'][i]['jam_target'] == "12:00") {
            //    var jam_mulai = 'jam_8';
            //    var range = "range_4";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "12:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "12:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_3";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_3_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_4";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_4_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_5";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_5_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_6";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_6_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_7";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_7_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_8";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "08:00" && data['tiket_gangguan'][i]['jam_target'] == "13:00") {
            //    var jam_mulai = 'jam_8';
            //    var range = "range_5";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_3";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_3_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_4";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_4_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_5";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_5_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_6";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_6_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_7";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "08:00" && data['tiket_gangguan'][i]['jam_target'] == "14:00") {
            //    var jam_mulai = 'jam_8';
            //    var range = "range_6";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_3";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_3_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_4";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_4_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_5";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_5_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_6";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "08:00" && data['tiket_gangguan'][i]['jam_target'] == "15:00") {
            //    var jam_mulai = 'jam_8';
            //    var range = "range_7";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_3";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_3_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_4";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_4_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_5";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "08:00" && data['tiket_gangguan'][i]['jam_target'] == "16:00") {
            //    var jam_mulai = 'jam_8';
            //    var range = "range_8";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_16";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_16";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_16";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_16";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_16";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_16";
            //          var lewat = "range_3";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_16";
            //          var lewat = "range_3_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_16";
            //          var lewat = "range_4";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "08:00" && data['tiket_gangguan'][i]['jam_target'] == "17:00") {
            //    var jam_mulai = 'jam_8';
            //    var range = "range_9";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "17:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "17:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_17";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "17:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_17";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "17:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_17";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "17:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_17";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "17:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_17";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "17:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_17";
            //          var lewat = "range_3";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "08:00" && data['tiket_gangguan'][i]['jam_target'] == "18:00") {
            //    var jam_mulai = 'jam_8';
            //    var range = "range_10";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "18:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "18:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_18";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "18:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_18";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "18:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_18";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "18:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_18";
            //          var lewat = "range_2";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "08:00" && data['tiket_gangguan'][i]['jam_target'] == "19:00") {
            //    var jam_mulai = 'jam_8';
            //    var range = "range_11";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "19:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "19:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_19";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "19:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_19";
            //          var lewat = "range_1";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "08:00" && data['tiket_gangguan'][i]['jam_target'] == "20:00") {
            //    var jam_mulai = 'jam_8';
            //    var range = "range_12";
            //    var ada = "";
            //    var lanjut = "";
            //    var lewat = "";
            // }
            // // batas
            // else if (data['tiket_gangguan'][i]['jam_mulai'] == "09:00" && data['tiket_gangguan'][i]['jam_target'] == "10:00") {
            //    var jam_mulai = 'jam_9';
            //    var range = "range_1";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "10:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "10:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "11:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "11:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "12:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "12:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_3";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_3_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_4";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_4_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_5";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_5_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_6";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_6_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_7";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_7_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_8";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_8_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_9";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_9_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "10:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_10";
            //          var lewat = "range_10";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "09:00" && data['tiket_gangguan'][i]['jam_target'] == "11:00") {
            //    var jam_mulai = 'jam_9';
            //    var range = "range_2";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "11:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "11:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "12:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "12:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_3";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_3_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_4";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_4_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_5";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_5_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_6";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_6_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_7";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_7_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_8";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_8_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "11:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_11";
            //          var lewat = "range_9";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "09:00" && data['tiket_gangguan'][i]['jam_target'] == "12:00") {
            //    var jam_mulai = 'jam_9';
            //    var range = "range_3";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "12:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "12:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_3";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_3_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_4";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_4_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_5";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_5_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_6";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_6_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_7";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_7_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "12:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_12";
            //          var lewat = "range_8";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "09:00" && data['tiket_gangguan'][i]['jam_target'] == "13:00") {
            //    var jam_mulai = 'jam_9';
            //    var range = "range_4";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "13:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_3";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_3_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_4";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_4_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_5";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_5_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_6";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_6_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "13:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_13";
            //          var lewat = "range_7";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "09:00" && data['tiket_gangguan'][i]['jam_target'] == "14:00") {
            //    var jam_mulai = 'jam_9';
            //    var range = "range_5";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "14:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_3";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_3_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_4";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_4_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_5";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_5_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "14:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_14";
            //          var lewat = "range_6";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "09:00" && data['tiket_gangguan'][i]['jam_target'] == "15:00") {
            //    var jam_mulai = 'jam_9';
            //    var range = "range_6";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "15:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_3";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_3_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_4";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_4_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "15:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_15";
            //          var lewat = "range_5";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "09:00" && data['tiket_gangguan'][i]['jam_target'] == "16:00") {
            //    var jam_mulai = 'jam_9';
            //    var range = "range_7";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "16:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_16";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_16";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_16";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_16";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_16";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_16";
            //          var lewat = "range_3";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_16";
            //          var lewat = "range_3_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "16:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_16";
            //          var lewat = "range_4";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "09:00" && data['tiket_gangguan'][i]['jam_target'] == "17:00") {
            //    var jam_mulai = 'jam_9';
            //    var range = "range_8";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "17:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "17:00" && data['tiket_gangguan'][i]['jam_selesai'] == "17:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_17";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "17:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_17";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "17:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_17";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "17:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_17";
            //          var lewat = "range_2";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "17:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_17";
            //          var lewat = "range_2_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "17:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_17";
            //          var lewat = "range_3";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "09:00" && data['tiket_gangguan'][i]['jam_target'] == "18:00") {
            //    var jam_mulai = 'jam_9';
            //    var range = "range_9";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "18:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "18:00" && data['tiket_gangguan'][i]['jam_selesai'] == "18:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_18";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "18:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_18";
            //          var lewat = "range_1";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "18:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_18";
            //          var lewat = "range_1_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "18:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_18";
            //          var lewat = "range_2";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "09:00" && data['tiket_gangguan'][i]['jam_target'] == "19:00") {
            //    var jam_mulai = 'jam_9';
            //    var range = "range_10";

            //    if (data['tiket_gangguan'][i]['jam_selesai'] != "-") {
            //       if (data['tiket_gangguan'][i]['jam_target'] == "19:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:00") {
            //          var ada = "";
            //          var lanjut = "";
            //          var lewat = "";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "19:00" && data['tiket_gangguan'][i]['jam_selesai'] == "19:30") {
            //          var ada = "lewat";
            //          var lanjut = "jam_19";
            //          var lewat = "range_30";
            //       } else if (data['tiket_gangguan'][i]['jam_target'] == "19:00" && data['tiket_gangguan'][i]['jam_selesai'] == "20:00") {
            //          var ada = "lewat";
            //          var lanjut = "jam_19";
            //          var lewat = "range_1";
            //       }
            //    } else {
            //       var ada = "";
            //       var lanjut = "";
            //       var lewat = "";
            //    }

            // } else if (data['tiket_gangguan'][i]['jam_mulai'] == "09:00" && data['tiket_gangguan'][i]['jam_target'] == "20:00") {
            //    var jam_mulai = 'jam_9';
            //    var range = "range_11";
            //    var ada = "";
            //    var lanjut = "";
            //    var lewat = "";
            // }

            dataprogres +=
              `
                  <tr>
                     <td height="40px" class="text-center">
                        <p class="no_progres">1</p>
                     </td>
                     <td colspan="13">
                        <div class="pekerjaan tiket_gangguan ` +
              jam_mulai +
              ` ` +
              range +
              `" data-bs-toggle="modal" data-bs-target="#Infracare">
                           <span class="title_progres">` +
              data["tiket_gangguan"][i]["order_id"] +
              `</span>
                        </div>
                        <div class="` +
              ada +
              ` ` +
              lanjut +
              ` ` +
              lewat +
              `"></div>
                     </td>
                  </tr>`;
          }
        }

        $("#dataprogres").html(dataprogres);
      },
    });
  });
});
