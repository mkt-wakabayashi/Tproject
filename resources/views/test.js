$(function() {
  $("#xxdate").datepicker( {
    numberOfMonths: 3,     // 3ヶ月分表示
    showCurrentAtPos: 1,   // 表示位置は左から2番目 (真ん中)
    stepMonths: 3,         // 月の移動を3ヶ月単位とする
    showButtonPanel: true, // ボタン領域を表示
    gotoCurrent: true      // ボタン領域に「今日」ボタンを表示
  } );
 
  // 日本語化
  $.datepicker.regional['ja'] = {
    closeText: '閉じる',
    prevText: '<前',
    nextText: '次>',
    currentText: '今日',
    monthNames: ['1月','2月','3月','4月','5月','6月',
    '7月','8月','9月','10月','11月','12月'],
    monthNamesShort: ['1月','2月','3月','4月','5月','6月',
    '7月','8月','9月','10月','11月','12月'],
    dayNames: ['日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日'],
    dayNamesShort: ['日','月','火','水','木','金','土'],
    dayNamesMin: ['日','月','火','水','木','金','土'],
    weekHeader: '週',
    dateFormat: 'yy/mm/dd',
    firstDay: 0,
    isRTL: false,
    showMonthAfterYear: true,
    yearSuffix: '年'};
  $.datepicker.setDefaults($.datepicker.regional['ja']);
});