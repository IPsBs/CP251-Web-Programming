// window_info ของสถานที่ปัจจุบัน
var current_position_info = '<div id="content">' +
  '<div id="siteNotice">' +
  '</div>' +
  '<h1 id="firstHeading" class="firstHeading">Current Position</h1>' +
  '</div>';

// window_info ของสถานที่ต่างๆ

var place_1_info = '<div id="content">' +
  '<div id="siteNotice">' +
  '</div>' +
  '<h1 id="firstHeading" class="firstHeading">The Hub Café and Eatery</h1>' +
  '<div id="bodyContent">' +
  '<p>ใครชอบนั่งเล่นใกล้ชิดธรรมชาติ ต้องลองมาทักทายต้นไม้ใหญ่ 5 ต้นที่แผ่กิ่งก้านอยู่รายรอบ The Hub Café and Eatery ร้านอาหารและคาเฟ่ของบริษัท Sun168 ร้านนี้เป็นหนึ่งในธุรกิจร้านอาหารและโรงแรมของบริษัทที่เน้นคุณภาพทั้งอาหารและเครื่องดื่ม</p>' +
  '<p>ที่ตั้ง : 199/9 ซอยพระรามเก้า 41 ถนนพระรามเก้า เขตสวนหลวง กรุงเทพมหานคร</p>' +
  '<a>092 789 7181 หรือทาง Facebook l The Hub Cafe and Eatery</a> ' +
  '.</p>' +
  '</div>' +
  '</div>';

var place_2_info = '<div id="content">' +
  '<div id="siteNotice">' +
  '</div>' +
  '<h1 id="firstHeading" class="firstHeading">BAKER X FLORIST Café</h1>' +
  '<div id="bodyContent">' +
  '<p>หากรู้สึกเหนื่อยหน่ายกับเมืองสีเทา แวะมารับการโอบกอดจากของหวานและดอกไม้ได้ที่นี่ ด้วยการตกแต่งสไตล์โมร็อกโกที่คุมสีเอิร์ธโทน ด้านหนึ่งมีหน้าร้านสำหรับให้บริการจัดดอกไม้ ส่วนอีกด้านหนึ่งเป็นร้านกาแฟ ที่มีทั้งอาหาร ขนม และเครื่องดื่ม บาร์พนักงานตั้งอยู่กลางห้องเพื่อให้มองเห็นลูกค้าได้ครบโต๊ะ</p>' +
  '<p>ที่ตั้ง : 66 ซอยพระรามเก้า 41 ถนนพระรามเก้า เขตสวนหลวง กรุงเทพมหานคร</p>' +
  '<a>090 669 5624 หรือทาง Facebook : Baker x Florist</a> ' +
  '.</p>' +
  '</div>' +
  '</div>';

var place_3_info = '<div id="content">' +
  '<div id="siteNotice">' +
  '</div>' +
  '<h1 id="firstHeading" class="firstHeading">สวนสาธารณะ รฟม. พระราม 9</h1>' +
  '<div id="bodyContent">' +
  '<p>ย่านพระราม 9 มีพื้นที่สีเขียวขนาดกะทัดรัดแต่คุณภาพเยี่ยมซุกซ่อนอยู่ เพราะสวนแห่งนี้อยู่ในพื้นที่ของการรถไฟฟ้าขนส่งมวลชนแห่งประเทศไทย ถึงจะมีรั้วล้อมเป็นสัญลักษณ์รูป MRT ให้หน้าตาดูคล้ายสำนักงาน</p>' +
  '<p>ที่ตั้ง : 175 ถนนพระราม 9 เขตห้วยขวาง กรุงเทพมหานคร 10310</p>' +
  '<a>02 716 4000</a> ' +
  '.</p>' +
  '</div>' +
  '</div>';

var place_4_info = '<div id="content">' +
  '<div id="siteNotice">' +
  '</div>' +
  '<h1 id="firstHeading" class="firstHeading">BIG Co-Working Space</h1>' +
  '<div id="bodyContent">' +
  '<p>หากการต้องเข้าออฟฟิศแห้งแล้งบนตึกป็นเรื่องทรมานใจ เราแนะนำให้ลองเปลี่ยนมาทำงานที่ BIG Co-Working Space ชื่อ BIG นอกจากจะแปลว่าใหญ่แล้วยังย่อมาจาก business innovation garage co-working space แห่งนี้คิดค่าเข้าเป็นรายวัน วันละ 250 บาท มีชากาแฟฟรีไม่อั้น หรือหากฟรีแลนซ์คนไหนอยากใช้เป็นประจำ ก็เหมาจ่าย 4,000 บาทต่อเดือนได้เลย ส่วนออฟฟิศส่วนตัว จะต้องมากันจำนวน 6 คนขึ้นไปและทำสัญญาเช่า 6 เดือนขึ้นไปเท่านั้น </p>' +
  '<p>ที่ตั้ง : 129 ถนนพระราม 9 เขตห้วยขวาง กรุงเทพมหานคร 10310</p>' +
  '<a>081 649 5939 หรือที่ www.bigcoworking.space</a> ' +
  '.</p>' +
  '</div>' +
  '</div>';

var place_5_info = '<div id="content">' +
  '<div id="siteNotice">' +
  '</div>' +
  '<h1 id="firstHeading" class="firstHeading">The Barber & Shop, Warate no.2</h1>' +
  '<div id="bodyContent">' +
  '<p>วันหยุดนี้ หากคุณผู้ชาย (หรือคุณผู้หญิงผมสั้น) ท่านไหนอยากทำผม แต่เขินไม่กล้าเข้าร้านซาลอนทั่วไป เราขอเสนอ The Barber & Shop ใว้ให้พิจารณา ที่นี่มีบริการเต็มรูปแบบให้คุณได้ผ่อนคลายเต็มที่ ทั้งสระผม ทำผม โกนหนวด นวดไหล่</p>' +
  '<p>ที่ตั้ง : The Nine Center Rama 9 ระหว่างร้าน S&P และ Boots ถนนพระรามเก้า เขตสวนหลวง กรุงเทพมหานคร</p>' +
  '<a>02 056 7879 หรือที่ www.thebarberandshop.com</a> ' +
  '.</p>' +
  '</div>' +
  '</div>';

  window.onload = function () {


    if (navigator.geolocation) {  // เช็คว่า browser รองรับ GeoLocation API.

      // ถ้า browser รองรับ ให้ทำการดึงค่าตำแหน่งปัจจุบัน
      navigator.geolocation.getCurrentPosition(function (position) {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        showMap(lat, lon);
      });

    }
    else {

      // กรณีที่ browser ไม่รองรับ
      document.write('Your browser does not support GeoLocation');

    }
  }


function showMap(lat, lon) {

  // <!-- ส่วนกำหนดแสดงสถานที่ปัจจุบนที่อยู่ -->

  var curLatLng = new google.maps.LatLng(lat, lon); //แปลงเป็นตำแหน่งที่ google map อ่านได้

  var mapOptions = { //กำหนด mapOptions ของ google map
    zoom: 10, center: curLatLng, mapTypeId:
      google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.getElementById('map'), //ทำการแสดง google_map ตาม Options ที่กำหนด
    mapOptions);

  var info_current_position = new google.maps.InfoWindow({
    content: current_position_info
  });

  //ส่วนกำหนด marker ของ current_position
  var marker_current = new google.maps.Marker({
    position: curLatLng,
    map: map,
    title: 'Current Position'
  });

  //ส่วนกำหนดการแสดง  window_info
  marker_current.addListener('click', function () {
    info_current_position.open(map, marker_current);
  });


  // <!-- ส่วนกำหนดแสดงสถานที่ต่างๆ-->

  //สถานที่ 1
  var p1 = {
    lat: 13.742802182007836,
    lng: 100.61892215092564
  };

  var info_place_1 = new google.maps.InfoWindow({
    content: place_1_info
  });

  //ส่วนกำหนด marker ของ place_1
  var marker_p1 = new google.maps.Marker({
    position: p1,
    map: map,
    title: 'Harvest Restaurant'
  });

  //ส่วนกำหนดการแสดง  window_info
  marker_p1.addListener('click', function () {
    info_place_1.open(map, marker_p1);
  });

  //สถานที่ 2
   var p2 = {
    lat: 13.742023980600791,
    lng: 100.62666877720238
  };

  var info_place_2 = new google.maps.InfoWindow({
    content: place_2_info
  });

  //ส่วนกำหนด marker ของ place_2
  var marker_p2 = new google.maps.Marker({
    position: p2,
    map: map,
    title: 'Simiao Kafei'
  });

  //ส่วนกำหนดการแสดง  window_info
  marker_p2.addListener('click', function () {
    info_place_2.open(map, marker_p2);
  });

   //สถานที่ 3
   var p3 = {
    lat: 13.763577781048271,
    lng: 100.59316753957965
  };

  var info_place_3 = new google.maps.InfoWindow({
    content: place_3_info
  });

  //ส่วนกำหนด marker ของ place_3
  var marker_p3 = new google.maps.Marker({
    position: p3,
    map: map,
    title: 'Unbirthday Cafe'
  });

  //ส่วนกำหนดการแสดง  window_info
  marker_p3.addListener('click', function () {
    info_place_3.open(map, marker_p3);
  });

  //สถานที่ 4
  var p4 = {
    lat: 13.756467806574657,
    lng: 100.57192784328201
  };

  var info_place_4 = new google.maps.InfoWindow({
    content: place_4_info
  });

  //ส่วนกำหนด marker ของ place_1
  var marker_p4 = new google.maps.Marker({
    position: p4,
    map: map,
    title: 'DNA Coffee'
  });

  //ส่วนกำหนดการแสดง  window_info
  marker_p4.addListener('click', function () {
    info_place_4.open(map, marker_p4);
  });

  //สถานที่ 5
  var p5 = {
    lat: 13.741741538159342 ,
    lng: 100.62444499539991
  };

  var info_place_5 = new google.maps.InfoWindow({
    content: place_5_info
  });

  //ส่วนกำหนด marker ของ place_1
  var marker_p5 = new google.maps.Marker({
    position: p5,
    map: map,
    title: 'Truly Scrumptious'
  });

  //ส่วนกำหนดการแสดง  window_info
  marker_p5.addListener('click', function () {
    info_place_5.open(map, marker_p5);
  });

}