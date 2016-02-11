$().ready(function(){ 
    var dialog, form,
    name = $( "#name" ),
    surname = $( "#surname" ),
    birthdate = $( "#birthdate" ),
    superskill = $( "#superskill" ),
    allFields = $( [] ).add( name ).add( surname ).add( birthdate ).add( superskill );

    function addUser() {
        $.ajax({
            url: 'scripts/ajaxSpaceman.php',
            type: 'POST',
            async: false,
            data: 'action=add'
                    +'&name='+name.val()
                    +'&surname='+surname.val()
                    +'&birthdate='+birthdate.val()
                    +'&superskill='+superskill.val()
            ,
            success: function(data) { 
                $( "#users tbody" ).append( 
                    "<tr>" +
                        "<td>" + name.val() + "</td>" +
                        "<td>" + surname.val() + "</td>" +
                        "<td>" + birthdate.val() + "</td>" +
                        "<td>" + superskill.val() + "</td>" +
                        '<td><button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only delete" data-id="'+data+'"> x </button></td>' +
                    "</tr>" 
                );
                listenDelete();
            },
            error: function(data){
                
            }
        });
        //initFormat();
        dialog.dialog( "close" );
      

    }

    dialog = $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 300,
      width: 350,
      modal: true,
      buttons: {
        "Add": addUser,
        Cancel: function() {
          dialog.dialog( "close" );
        }
      },
      close: function() {
        form[ 0 ].reset();
      }
    });

    form = dialog.find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      addUser();
    });

    $( "#create-user" ).button().on( "click", function() {
      dialog.dialog( "open" );
    });
    
    listenDelete();
    initFormat();
    
    
    
});
  
function initFormat(){
    $('td').each(function(){
        if($(this).is('.format')){
            if($(this).is('.date')){
                var timestamp = Date.parse($(this).text());
                var d = new Date(timestamp);
                //http://stackoverflow.com/questions/3066586
                var yyyy = d.getFullYear();
                var mm = d.getMonth() < 9 ? "0" + (d.getMonth() + 1) : (d.getMonth() + 1); // getMonth() is zero-based
                var dd  = d.getDate() < 10 ? "0" + d.getDate() : d.getDate();
                var result = dd+'.'+mm+'.'+yyyy;
                $(this).text(result);
            }
        }
    });
}

function listenDelete(){
    $( "button.delete" ).on( "click", function() {
        var id = $(this).data('id');
        var row = $(this).parents('tr');
        $.ajax({
            url: 'scripts/ajaxSpaceman.php',
            type: 'POST',
            async: false,
            data: 'action=delete&id=' + id,
            success: function(data) { 
                row.remove();
            },
            error: function(data){
                
            }
        });

    });
}