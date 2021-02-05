var admin = {
	// laden blok verbergen of laten zien
	loading : function (show) {
    var block = document.getElementById("page-loader");
    if (show) { block.classList.add("active"); }
    else { block.classList.remove("active"); }
	},

  // zijbalk uitzetten
	sidebar : function () {
    document.getElementById("page-sidebar").classList.toggle("active");
	},


  ajax : function (opt) {
    // formulier data
    var data = new FormData();
    if (opt.data) { for (let key in opt.data) {
      data.append(key, opt.data[key]);
    }}

    // ajax laden
    var xhr = new XMLHttpRequest();
    xhr.open('POST', opt.url);
    xhr.onload = function(){
      // laden verbergen
      admin.loading(0);

      // debugen
      if (opt.debug) { console.log(this.response); }

      // server geeft errors
      if (this.status != 200) {
        alert(`Cannot access ${opt.url} - Server response code ${this.status}`);
      }

      // server is oke
      else {
        // wat de server teruggeeft
        if (opt.target) {
          document.getElementById(opt.target).innerHTML = this.response;
          if (typeof opt.ok == "function") { opt.ok(this.response); }
        }

        // post requests
        else {
          if (this.response == "OK") {
            if (typeof opt.ok == "function") { opt.ok(this.response); }
          } else {
            alert(this.response);
            if (typeof opt.error == "function") { opt.error(this.response); }
          }
        }
      }
    };

    // laden en gaan met die banaan
    admin.loading(1);
    xhr.send(data);
  },

  // Uitlopggen
	bye : function () { if (confirm("Sign off?")) {
    admin.ajax({
      url : "ajax-session.php",
      data : { req : "out" },
      ok : function () { location.reload(); }
    });
  }}
};