<section class="faqs-add faqs-edit d-none" id="editFaq">
  <div class="head d-flex px-4 py-3 justify-content-between" style="height: 69px;">
    <div class="d-flex gap-2">
      <div class="d-flex align-items-center faqs-back-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10" fill="none">
          <path d="M18 4.43303H2.17064L5.73852 0.865107L4.93671 0.0632935L0 4.99997L4.93671 9.93672L5.73852 9.13486L2.17064 5.56698H18V4.43303Z" fill="#192E3D" />
        </svg>
      </div>
      <div class="title">Edit Faq Details</div>
    </div>
    <div class="save-btns d-flex gap-3">
      <div class="default-btn-outlined cancel-btn">
        Cancel
      </div>
      <div class="default-btn save-btn" onclick="$('form#editFaqForm').submit()">
        Edit & Publish
      </div>
    </div>
  </div>

  <div class="faqs-add-main faqs-edit-main px-3">
    <form id="editFaqForm">

      <div class="row">

        <div class="col-md-6 pt-2">
          <div class="row g-3">

            <div class="col-md-12" data-key="id">
              <label for="id" class="form-label">Faq ID</label>
              <input type="text" class="form-control" id="id" name="id" readonly>
            </div>
            <div class="col-md-12" data-key="question">
              <label for="question" class="form-label">Question*</label>
              <input type="text" class="form-control" id="question" name="question" required>
            </div>
            <div class="col-md-12" data-key="answer">
              <label for="answer" class="form-label">Answer*</label>
              <input type="text" class="form-control" id="answer" name="answer" required>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>