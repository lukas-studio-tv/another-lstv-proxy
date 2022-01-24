alert("1");
   function load_js()
   {
      var head= document.getElementsByTagName('head')[0];
      var script= document.createElement('script');
      script.src= 'arrs.js';
      head.appendChild(script);
   }
   load_js();