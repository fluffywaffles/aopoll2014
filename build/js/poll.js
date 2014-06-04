function shuffle(entries) {
  var currentIndex = entries.artists.length;
  var temporaryName;
  var temporaryId;
  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    var randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryName = entries.artists[currentIndex].name;
    temporaryId = entries.artists[currentIndex].id;

    entries.artists[currentIndex].name =  entries.artists[randomIndex].name;
    entries.artists[currentIndex].id =  entries.artists[randomIndex].id;

    entries.artists[randomIndex].name = temporaryName;
    entries.artists[randomIndex].id = temporaryId;

  }

  return entries;
}

function fillEntries(){
    var poll = $('#artist-entries');
    var entries = {"artists": [
            {"name": "Iggy Azealia", "id": "iggyazealia"},
            {"name": "Flume", "id": "flume"},
            {"name": "The Neighbourhood", "id": "theneighbourhood"},
            {"name": "Haim", "id": "haim"},
            {"name": "Janelle Monae", "id": "janellemonae"},
            {"name": "Fitz & the Tantrums", "id": "fitzandthetantrums"},
            {"name": "Sam Smith", "id": "samsmith"},
            {"name": "CHVRCHES", "id": "chvrches"},
            {"name": "James Blake", "id": "jamesblake"},
            {"name": "Schoolboy Q", "id": "schoolboyq"},
            {"name": "Aluna George", "id": "alunageorge"},
            {"name": "Alabama Shakes", "id": "alabamashakes"},
            {"name": "Aloe Blaac", "id": "aloeblaac"},
            {"name": "Tegan and Sara", "id": "teganandsara"},
            {"name": "Temper Trap", "id": "tempertrap"},
            {"name": "RAC", "id": "rac"},
            {"name": "Juicy J", "id": "juicyj"},
            {"name": "ASAP Ferg", "id": "asapferg"},
            {"name": "Wale", "id": "wale"},
            {"name": "Lil B", "id": "lilb"},
            {"name": "The Roots", "id": "theroots"},
            {"name": "Big Sean", "id": "bigsean"},
            {"name": "Cherub", "id": "cherub"},
            {"name": "Miguel", "id": "miguel"},
            {"name": "M.I.A.", "id": "mia"},
            {"name": "Sia", "id": "sia"},
            {"name": "Jason Derulo", "id": "jasonderulo"},
            {"name": "The Head and the Heart", "id": "theheadandtheheart"},
            {"name": "The Naked and Famous", "id": "thenakedandfamous"},
            {"name": "The 1975", "id": "the1975"},
            {"name": "Joey Bada$$", "id": "joeybadass"},
            {"name": "Neon Trees", "id": "neontrees"},
            {"name": "Icona Pop", "id": "iconapop"},
            {"name": "Alesso", "id": "alesso"},
            {"name": "Dale Earnhart Jr Jr", "id": "daleearnhartjrjr"},
            {"name": "Solange", "id": "solange"},
            {"name": "Adventure Club", "id": "adventureclub"},
            {"name": "Ariana Grande", "id": "arianagrande"},
            {"name": "Bleachers", "id": "bleachers"},
            {"name": "​Future​", "id": "​future​"},
        ]
    };

    entries = shuffle(entries);

    for (var i = 0; i < entries.artists.length; i++){
        var e = '<li id="'+entries.artists[i].id+'"><label><input type="checkbox" name="artist" value="'+entries.artists[i].id+'"><span>'+entries.artists[i].name+'</span></label>'
        poll.append(e)
    }
}

$('#email').focusout(function(){
        if (!(($(this).val().indexOf("@") == -1) || ($(this).val().indexOf("northwestern.edu") == -1)) ) {
            $(this).next(".check").next('.error-text').css('display', 'none');
            $(this).next(".check").css('display', 'inline-block');    
        }
})
$('#name').focusout(function(){
        if ($(this).val().length != 0) {
            $(this).removeClass("error-active");
            $(this).next(".check").next('.error-text').css('display', 'none');
            $(this).next(".check").css('display', 'inline-block');    
        }
})
$('#year').focusout(function(){
        if ($(this).val() != '---Select---'){
            $(this).removeClass("error-active");
            $(this).next(".check").next('.error-text').css('display', 'none');
            $(this).next(".check").css('display', 'inline-block');    
        }
})
$('#location').focusout(function(){
        if ($(this).val() != '---Select---'){
            $(this).removeClass("error-active");
            $(this).next(".check").next('.error-text').css('display', 'none');
            $(this).next(".check").css('display', 'inline-block');    
        }
})
$('#gender').find("input").focusout(function() {
    if(($(this).is(':checked')) || ($(this).val() != '')) {
        $('#gender').find('span').removeClass("error-active");
        $('#gender').find(".check").next('.error-text').css('display', 'none');
        $('#gender').find(".check").css('display', 'inline-block');
      }
})


function submitCheck(){

  var checkForm = true;
  if (($("#email").val().indexOf("@") == -1) && ($("#email").val().indexOf("northwestern.edu") == -1)){
    checkForm = false;
    if(!$("#email").hasClass("error-active")){
      $("#email").addClass("error-active");
      $("#email").next(".check").next('.error-text').css('display', 'inline-block');
      $("#email").next(".check").css('display', 'none');
    }
  }
  if ($("#name").val().length == 0){
    checkForm = false;
    if(!$("#name").hasClass("error-active")){
      $("#name").addClass("error-active");
      $("#name").next(".check").next('.error-text').css('display', 'inline-block');
      $("#name").next(".check").css('display', 'none');
    }
  }
  if ($("#year").val() == '---Select---'){
    checkForm = false;
    if(!$("#year").hasClass("error-active")){
      $("#year").addClass("error-active");
      $("#year").next(".check").next('.error-text').css('display', 'inline-block');
      $("#year").next(".check").css('display', 'none');
    }
  }
  if ($("#location").val() == '---Select---'){
    checkForm = false;
    if(!$("#location").hasClass("error-active")){
      $("#location").addClass("error-active");
      $("#location").next(".check").next('.error-text').css('display', 'inline-block');
      $("#location").next(".check").css('display', 'none');
    }
  }

  if (($("input[name='gender']:checked").val() == undefined) && ($("input:text[name='gender']").val()
) == '' ){
    checkForm = false;
    if(!$("#gender").find('span').hasClass("error-active")){
      $("#gender").find('span').addClass("error-active");
      $("#gender").find(".check").next('.error-text').css('display', 'inline-block');
      $("#gender").find(".check").css('display', 'none');
    }
  }

  if (checkForm){
    return true;
  }
  return false;
}

