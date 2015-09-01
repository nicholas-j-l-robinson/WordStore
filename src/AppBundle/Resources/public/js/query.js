//Singleton for the WordStore admin functionality.
var wsSearch = new function(){
    
    this.setup = function(){
        $("#searchInput").keypress(function(e){
            if(e.which == 13) {
                wsSearch.doSearch($("#searchInput").val());
            }
        });
        
        $(".searchGo").click(function(){
            wsSearch.doSearch($("#searchInput").val());
        });
        
        $(".searchByLetter").click(function(){
            $("#searchInput").val("");
            wsSearch.doSearch($(this).data("letter"));
        });
    };
    
    this.doSearch = function(text){
        $('.sideMenuContainer').html("").addClass("loadingBackground");
        $('.storeDisplayContainer').html("");
        $.ajax({
            url: js_fix + './wordquery',
            type: 'post',
            data: {
                searchText: text
            },
            success: function(data) {
                $('.sideMenuContainer').removeClass("loadingBackground").html(data);
                wsSearch.setupSideMenu();
            }
        });
    };
    
    this.setupSideMenu = function(){
        $('.sideMenuContainer').find('.wordContainer').unbind('click').click(function(){
            wsSearch.getDefinitions($(this).data('word'));            
        });
    };
    
    this.getDefinitions = function(word){
        $('.storeDisplayContainer').html("").addClass("loadingBackground");
        $.ajax({
            url: js_fix + './worddefinition',
            type: 'post',
            data: {
                searchWord: word
            },
            success: function(data) {
                $('.storeDisplayContainer').removeClass("loadingBackground").html(data);
            }
        });
    };
};