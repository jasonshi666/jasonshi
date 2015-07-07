function show_search(){
    var search_input = document.getElementById('nav-search-input');
    if (search_input.className == 'show') {
      search_input.attributes.removeNamedItem('class');
      var class_name = document.createAttribute('class');
      class_name.value = 'hide';
      search_input.attributes.setNamedItem(class_name);
    } else {
      search_input.attributes.removeNamedItem('class');
      var class_name = document.createAttribute('class');
      class_name.value = 'show';
      search_input.attributes.setNamedItem(class_name);
    };
}

function load_bing() {
  var data = {
    title  : localStorage.getItem('bing_title') ? localStorage.getItem('bing_title') : '',
    desc : localStorage.getItem('bing_desc') ? localStorage.getItem('bing_desc') : '',
    url  : localStorage.getItem('bing_url') ? localStorage.getItem('bing_url') : '',
    date : localStorage.getItem('bing_date') ? localStorage.getItem('bing_date') : ''
  };

  if (new Date().getDate() == data.date & data.title != '' & data.desc != '' & data.url != '') {
    document.getElementById('logo').style.cssText+='background-image:url(' + data.url + ')';
    document.getElementById('logo').innerHTML = '<hgroup> \
    <h1 id="site-title"> \
    <a href="/">' + data.title + '</a> \
    </h1> \
    <h2 id="site-description">' + data.desc + '</h2> \
    </hgroup>';
  } else {
    var xmlhttp;
    if (window.XMLHttpRequest) {
      xmlhttp=new XMLHttpRequest();
    } else {
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        var data = JSON.parse(xmlhttp.responseText);
        document.getElementById('logo').style.cssText+='background-image:url(' + data.url + ')';

        if (data.title.length > data.desc.length) {
          title = data.desc;
          desc = data.title;
        } else {
          title = data.title;
          desc = data.desc;
        }

        document.getElementById('logo').innerHTML = '<hgroup> \
        <h1 id="site-title"> \
        <a href="/">' + title + '</a> \
        </h1> \
        <h2 id="site-description">' + desc + '</h2> \
        </hgroup>';

        localStorage.setItem('bing_title', title);
        localStorage.setItem('bing_desc', desc);
        localStorage.setItem('bing_url', data.url);
        localStorage.setItem('bing_date', new Date().getDate());
      }
    }
    xmlhttp.open("GET","http://lab.dobyi.com/api/bing.php",true);
    xmlhttp.send();
  }
}

load_bing();
