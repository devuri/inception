jQuery.noConflict(),jQuery(document).ready(function(e){e.expr[":"]["nth-of-type"]=function(e,n,i){var t=i[3].split("+");return(n+1-(t[1]||0))%parseInt(t[0],10)===0},e(".menu-toggle.open").addClass("visible"),e("#site-header .site-navigation").addClass("hidden"),e(".menu-toggle").click(function(){e(".menu-toggle").toggleClass("visible"),e("#site-header .site-navigation").slideToggle()})});