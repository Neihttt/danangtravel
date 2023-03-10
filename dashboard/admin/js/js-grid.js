(function($) {
    'use strict';
    $(function() {

        //basic config
        if($("#js-grid").length) {
          $("#js-grid").jsGrid({
              height: "500px",
              width: "100%",
              filtering: false,
              editing: true,
              inserting: false,
              sorting: true,
              paging: true,
              autoload: true,
              pageSize: 15,
              pageButtonCount: 5,
              deleteConfirm: "Bạn chắc muốn xóa bài viết chứ :)?",
              data: db.clients,
              fields: [{
                      name: "Bài Viết",
                      type: "text",
                      width: 250
                  },
                  {
                      name: "Người Đăng",
                      type: "text",
                      width: 50
                  },
                  {
                      name: "Ngày Đăng",
                      type: "text",
                      width: 70
                  },
                  {
                      type: "control"
                  }
              ]
          });
        }




        if($("#sort").length) {
          $("#sort").on("click", function () {
              var field = $("#sortingField").val();
              $("#js-grid-sortable").jsGrid("sort", field);
          });
        }

    });
})(jQuery);
