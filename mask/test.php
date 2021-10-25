<?php


function request($board){
    // $postData = array(
    //     "article"=>array(
    //         "cafeId"=> "12251599",
    //         "contentJson"=> "{\"document\":{\"version\":\"2.6.0\",\"theme\":\"default\",\"language\":\"ko-KR\",\"components\":[{\"id\":\"SE-ab82667e-12ec-4143-b379-95ddac50f1a5\",\"layout\":\"default\",\"value\":[{\"id\":\"SE-72020ab8-b14a-4cd0-b1bb-36ea38120519\",\"nodes\":[{\"id\":\"SE-36c760af-4db0-44e1-acb2-f33322b86df6\",\"value\":\"출석합니다~\",\"@ctype\":\"textNode\"}],\"@ctype\":\"paragraph\"}],\"@ctype\":\"text\"}]},\"documentId\":\"\"}",
    //         "from"=> "pc",
    //         "menuId"=> 430,
    //         "subject"=> "출석이용",
    //         "tagList"=> [],
    //         "editorVersion"=> 4,
    //         "parentId"=> 0,
    //         "open"=> 'true',
    //         "naverOpen"=> 'true',
    //         "externalOpen"=> 'true',
    //         "enableComment"=> 'true',
    //         "enableScrap"=> 'true',
    //         "enableCopy"=> 'true',
    //         "useAutoSource"=> 'true',
    //         "cclTypes"=> [],
    //         "useCcl"=> 'false'
    //     )
    // );
    
    $postData = '{"article":{"cafeId":"12251599","contentJson":"{\"document\":{\"version\":\"2.6.0\",\"theme\":\"default\",\"language\":\"ko-KR\",\"components\":[{\"id\":\"SE-deed763c-d06e-4d18-98e6-c67a8d7c9eb3\",\"layout\":\"default\",\"value\":[{\"id\":\"SE-9e3131c1-0dce-4cca-8d16-672c88b69202\",\"nodes\":[{\"id\":\"SE-6bb2ec8e-81ca-4c85-8e56-e81702ad33fd\",\"value\":\"'.$_POST['content'].'\",\"@ctype\":\"textNode\"}],\"@ctype\":\"paragraph\"}],\"@ctype\":\"text\"}]},\"documentId\":\"\"}","from":"pc","menuId":'.$board.',"subject":"'.$_POST['title'].'","tagList":[],"editorVersion":4,"parentId":0,"open":true,"naverOpen":true,"externalOpen":true,"enableComment":true,"enableScrap":true,"enableCopy":true,"useAutoSource":true,"cclTypes":[],"useCcl":false}}';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://apis.naver.com/cafe-web/cafe-editor-api/v1.0/cafes/12251599/menus/'.$board.'/articles');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        // 'accept: application/json, text/plain, */*',
        // 'accept-encoding: gzip, deflate, br',
        // 'accept-language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
        // 'content-length: 727',
        'content-type: application/json;charset=UTF-8',
        'cookie: NNB=KYR5KD22CD2F6; _ga_7VKFYR6RV1=GS1.1.1613132742.3.0.1613132742.60; NRTK=ag#20s_gr#0_ma#-2_si#-2_en#-2_sp#-2; ASID=b4e23fec000001781af2eb530000005f; _ga=GA1.1.637406690.1610460752; _ga_1BVHGNLQKG=GS1.1.1616838611.1.1.1616838614.0; NV_WETR_LOCATION_RGN_M="MDk2MjAxMDI="; nx_ssl=2; NV_WETR_LAST_ACCESS_RGN_M="MDk2MjAxMDI="; nid_inf=425282227; NID_AUT=unsxLtoMPxt5nsqhPodwNQ1WDYC0erauvGhbJ0lpuZaKkl6sR9JBC+QTim8u3gYe; NID_JKL=XMp94ZPGAofO/rvDeFaXU1mLf0Y3/8q9fVHGkkl7kno=; NID_SES=AAABfM7ngBzKProvyqdnxP2gLeh6AkNlRxMo6TqrzcCC+IY7MphiPjUxR4rAjVyT5IpEsO1ERrhn7gIufIRmWGEUzjLrxzMGIAd/H0BPZeMJhE2gV3yMQp5TYAS9KJ8VWGRAXNVxHq5bF78Z8jbf21n/Y271O8OW/t7ARJ3FZvYq64JQOzcN/W7mpkYpd2Wm4t/BJYiuzt0bakadc58buqWWEixJI8dHv/5yivPfJVvrXU+FMs4wadGy+Pl7TREdW/TJvnNQfcU05PftiiIwfpP3CHNXMuvpiSG2IMKinzlAJMpRVvSxIBDprVPIIGQo6x6bJrGArr/HBWK5Rx26dVz1fhVmKPSMTpAJghjXrAebzz+ZdZOHSgulFIY8euWlgMNpLt5FQIi/UtGp0MbzXQmQ6UQZC2H8N3ad1aAP4NpIyofILz1avfHRqzaAFWtOR742M0WthASKtmg8TXunDLmuwB7eNUjLpzb6UgXyKz/26RtMZAj39NAtRnJV6QUQqrAoVg==',
        'origin: https://cafe.naver.com',
        'referer: https://cafe.naver.com/ca-fe/cafes/12251599/articles/write?boardType=L',
        'sec-ch-ua: "Chromium";v="92", " Not A;Brand";v="99", "Google Chrome";v="92"',
        // 'sec-ch-ua-mobile: ?0',
        // 'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36',
        // 'x-cafe-product: pc'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_POST, 1); // URL에 post 데이터 보내기
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);  // URL에 post 데이터 보내기
    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

function request2(){

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://apis.naver.com/cafe-home-web/cafe-home/v1/config/join-cafes/groups/?page=1');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        // 'accept: application/json, text/plain, */*',
        // 'accept-encoding: gzip, deflate, br',
        // 'accept-language: ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
        // 'content-length: 727',
        'content-type: application/json;charset=UTF-8',
        // 'cookie: NNB=KYR5KD22CD2F6; _ga_7VKFYR6RV1=GS1.1.1613132742.3.0.1613132742.60; NRTK=ag#20s_gr#0_ma#-2_si#-2_en#-2_sp#-2; ASID=b4e23fec000001781af2eb530000005f; _ga=GA1.1.637406690.1610460752; _ga_1BVHGNLQKG=GS1.1.1616838611.1.1.1616838614.0; NV_WETR_LOCATION_RGN_M="MDk2MjAxMDI="; nx_ssl=2; NV_WETR_LAST_ACCESS_RGN_M="MDk2MjAxMDI="; nid_inf=425282227; NID_AUT=unsxLtoMPxt5nsqhPodwNQ1WDYC0erauvGhbJ0lpuZaKkl6sR9JBC+QTim8u3gYe; NID_JKL=XMp94ZPGAofO/rvDeFaXU1mLf0Y3/8q9fVHGkkl7kno=; NID_SES=AAABfM7ngBzKProvyqdnxP2gLeh6AkNlRxMo6TqrzcCC+IY7MphiPjUxR4rAjVyT5IpEsO1ERrhn7gIufIRmWGEUzjLrxzMGIAd/H0BPZeMJhE2gV3yMQp5TYAS9KJ8VWGRAXNVxHq5bF78Z8jbf21n/Y271O8OW/t7ARJ3FZvYq64JQOzcN/W7mpkYpd2Wm4t/BJYiuzt0bakadc58buqWWEixJI8dHv/5yivPfJVvrXU+FMs4wadGy+Pl7TREdW/TJvnNQfcU05PftiiIwfpP3CHNXMuvpiSG2IMKinzlAJMpRVvSxIBDprVPIIGQo6x6bJrGArr/HBWK5Rx26dVz1fhVmKPSMTpAJghjXrAebzz+ZdZOHSgulFIY8euWlgMNpLt5FQIi/UtGp0MbzXQmQ6UQZC2H8N3ad1aAP4NpIyofILz1avfHRqzaAFWtOR742M0WthASKtmg8TXunDLmuwB7eNUjLpzb6UgXyKz/26RtMZAj39NAtRnJV6QUQqrAoVg==',
        'origin: https://cafe.naver.com',
        'referer: https://cafe.naver.com/ca-fe/cafes/12251599/articles/write?boardType=L',
        'sec-ch-ua: "Chromium";v="92", " Not A;Brand";v="99", "Google Chrome";v="92"',
        // 'sec-ch-ua-mobile: ?0',
        // 'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36',
        // 'x-cafe-product: pc'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    // curl_setopt($ch, CURLOPT_POST, 1); // URL에 post 데이터 보내기
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);  // URL에 post 데이터 보내기
    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}
// echo 1233;
// 430 77

// $a = request(430);
// $b = request(77);

// // echo json_encode();

// echo $a;

// echo '--------------------';

// echo $b;

echo request2();

?>
