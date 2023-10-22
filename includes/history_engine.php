<br><br>
<?php
function formatDates($timestamp) {
    $today = new DateTime();
    $today->setTime(0, 0);

    $yesterday = new DateTime('-1 day');
    $yesterday->setTime(0, 0);

    $inputDate = new DateTime();
    $inputDate->setTimestamp($timestamp);

    if ($inputDate >= $today) {
        return "Сегодня";
    } elseif ($inputDate >= $yesterday) {
        return "Вчера";
    } else {
        $months = [
            "января", "февраля", "марта", "апреля", "мая", "июня", 
            "июля", "августа", "сентября", "октября", "ноября", "декабря"
        ];

        $daysOfWeek = [
            "воскресенье", "понедельник", "вторник", "среда", 
            "четверг", "пятница", "суббота"
        ];

        $day = $inputDate->format('j');
        $month = $months[$inputDate->format('n') - 1];
        $dayOfWeek = $daysOfWeek[$inputDate->format('w')];

        return sprintf("%d %s, %s", $day, $month, $dayOfWeek);
    }
}


$result = $conn->query("SELECT * FROM tinkoff_history ORDER BY `date` DESC");
$formatDate = "";
while($row = $result->fetch_assoc()) {
  $date = new DateTime($row["date"]);
  $dmY = $date->format('d.m.Y');
  $Hi = $date->format('H:i');


  $h_balance = formatH($row['moneyAmount']);
  if ($row['status'] == 'deposit') {
    $logo = '<div class="TimelineItem__logo_hJMN-+E" data-qa-type="timeline-item-logo" data-qa-file="TimelineItem"><div class="Logo__logo_au7NUT" style="width: 48px; height: 48px; line-height: 48px; background-color: rgb(255, 221, 45);" data-qa-file="Logo"><span data-qa-file="Logo">В</span></div></div>';
    $source = "Дебетовая карта";
    $color_sum = 'color: rgb(34, 160, 83);';
    $money_symbol = "+";
  } else {
    $logo = '<div class="TimelineItem__logo_hJMN-+E" data-qa-type="timeline-item-logo" data-qa-file="TimelineItem"><div class="Logo__logo_au7NUT" style="width: 48px; height: 48px; line-height: 48px; background-color: rgb(228, 235, 244);" data-qa-file="Logo"><span data-qa-file="Logo">П</span></div></div>';
    $source = "Tinkoff Black Premium";
    $color_sum = 'color: rgba(0,0,0,.8);';
    $money_symbol = "−";
  }

  if (strlen($row['msgToUser']) > 1) {
    $msg = '<div class="UITimelineOperationItem__message_geIfsN" data-qa-file="UITimelineOperationItem">
        <p class="UITimelineOperationItem__userMessage_heIfsN UITimelineOperationItem__userMessage_outgoing_ieIfsN" data-qa-type="operation-footer-user-message" data-cobrowsing-secure="text" data-qa-file="UITimelineOperationItem">'.$row['msgToUser'].'</p>
      </div>';
  } else {
    $msg = '';
  }


  $new_formatDate = formatDates(strtotime($row["date"]));
  if ($formatDate != $new_formatDate) {
    echo '<h4 class="TimelineList__item_aGjSGN TimelineList__item_delimiter_cGjSGN" data-qa-type="timeline-operations-date" data-cobrowsing-secure="text" data-qa-file="TimelineList">'.$new_formatDate.'</h4>';
    $formatDate = $new_formatDate;
  }
?>
<a href="/feed.php?operationId=<?=$row['id']?>" style="text-decoration: none; color: inherit;">
  <div class="TimelineList__item_aGjSGN TimelineList__item_default_bGjSGN" data-qa-file="TimelineList">
  <div data-qa-file="PortalContainer" data-qa-type="uikit/portalWrapper" class="PortalContainer--module__container_ax6dAR PortalWrapper--module__root_a4udTh" data-tds-portal-wrapper="">
    <div data-qa-type="uikit/portalWrapper.exit" data-tds-portal-exit=""></div>
    <div class="UITimelineOperationItem__root_aeIfsN UITimelineOperationItem__clickable_deIfsN" data-qa-type="timeline-operation" data-qa-item-grouped="false" data-qa-item-installment="false" data-qa-file="UITimelineOperationItem">
      <div class="TimelineItem__container_aJMN-+E" data-qa-file="TimelineItem">
        <?=$logo?>
        <div class="TimelineItem__content_iJMN-+E TimelineItem__content_columns_sJMN-+E" data-qa-file="TimelineItem">
          <div class="TimelineItem__contentRow_qJMN-+E" data-qa-file="TimelineItem">
            <div class="TimelineItem__titleContainer_rJMN-+E" data-qa-file="TimelineItem"><span class="TimelineItem__title_gJMN-+E" data-qa-type="operation-source-and-target" data-cobrowsing-secure="text" data-qa-file="TimelineItem"><span class="TimelineItem__source_eJMN-+E" data-qa-file="TimelineItem"><?=$source?></span></span>
            </div>
            <div class="TimelineItem__total_oJMN-+E" data-cobrowsing-secure="text" data-qa-file="TimelineItem"><span style="<?=$color_sum?>" class="TimelineItem__value_cJMN-+E" data-qa-file="TimelineItem"><span data-qa-type="operation-money" data-cobrowsing-secure="text" class="Money--module__money_agICnB"><?=$money_symbol?><?=$h_balance[0]?><span class="Money--module__smalls_dgICnB" data-qa-file="Money">,<?=$h_balance[1]?></span></span>
              </span>
            </div>
          </div>
          <div class="TimelineItem__contentRow_qJMN-+E" data-qa-file="TimelineItem">
            <div class="TimelineItem__descriptionContainer_wJMN-+E" data-qa-type="operation-description" data-cobrowsing-secure="text" data-qa-file="TimelineItem">
              <div data-qa-type="operation-title" class="TimelineItem__description_vJMN-+E" title="Дарья Ш." data-qa-file="TimelineItem"><?=$row['description']?></div>
            </div>
            <div class="UITimelineOperationItem__subDescriptionContainer_meIfsN" data-qa-file="UITimelineOperationItem">
              <div class="UITimelineOperationItem__subDescription_leIfsN" data-qa-file="UITimelineOperationItem">
                <div data-qa-type="edit-disable" class="EditCategory__editContainer_flAw-+K EditCategory__editContainer_disabled_hlAw-+K" data-qa-file="EditCategory"><span class="EditCategory__smallView_jlAw-+K" data-qa-file="EditCategory">Переводы</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?=$msg?>
    </div>
  </div>
</div>
</a>
<?php 
}
?>