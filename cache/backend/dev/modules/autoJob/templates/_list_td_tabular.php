<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($jobeet_job->getId(), 'jobeet_job_edit', $jobeet_job) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_category_id">
  <?php echo $jobeet_job->getCategoryId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_type">
  <?php echo $jobeet_job->getType() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_company">
  <?php echo $jobeet_job->getCompany() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_logo">
  <?php echo $jobeet_job->getLogo() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_url">
  <?php echo $jobeet_job->getUrl() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_position">
  <?php echo $jobeet_job->getPosition() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_location">
  <?php echo $jobeet_job->getLocation() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $jobeet_job->getDescription() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_how_to_apply">
  <?php echo $jobeet_job->getHowToApply() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_token">
  <?php echo $jobeet_job->getToken() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_public">
  <?php echo get_partial('job/list_field_boolean', array('value' => $jobeet_job->getIsPublic())) ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_activated">
  <?php echo get_partial('job/list_field_boolean', array('value' => $jobeet_job->getIsActivated())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $jobeet_job->getEmail() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_expires_at">
  <?php echo false !== strtotime($jobeet_job->getExpiresAt()) ? format_date($jobeet_job->getExpiresAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($jobeet_job->getCreatedAt()) ? format_date($jobeet_job->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($jobeet_job->getUpdatedAt()) ? format_date($jobeet_job->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
