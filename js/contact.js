
        $(document).ready(function(e) {
            
            $(".stepsForm").stepsForm({
                theme:'purple'
            }); 
            
            $(".container .themes>span").click(function(e) {
                $(".container .themes>span").removeClass("selectedx");
                $(this).addClass("selectedx");
                $(".stepsForm").removeClass().addClass("stepsForm");
                $(".stepsForm").addClass("sf-theme-"+$(this).attr("data-value"));
            });
        });
    $(function () { 
      $("[data-toggle='tooltip']").tooltip(); 
    });