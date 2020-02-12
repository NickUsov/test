// $(document).ready(function(){
//     $('#filter-table').before('<div class="d-flex justify-content-end p-2 table-filters"><input type="text"></div>');
//     $('.table-filters input').on('input', function () {
//         filterTable($('#filter-table'));
//     });
//     function filterTable($table) {
//         let $filter = $('.table-filters input');
//         let $rows = $table.find('tr');
//         let valid;
//         $rows.each(function (rowIndex) {
//             valid = true;
//             let td = $(this).find('td');
//     outer: for(let i = 0; i < $(td).length; i ++){
//                 if($(td[i]).text().toLowerCase().indexOf($filter.val().toLowerCase()) == -1){
//                     valid = false;
//                 }
//                 else{
//                     valid = true;
//                     break outer;
//                 }
//             }    
//             if (valid === true) {
//                 $(this).css('display', '');
//             } else {
//                 $(this).css('display', 'none');
//             }
//         });
//     };
// });