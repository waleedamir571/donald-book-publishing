  <div class="col-lg-4 offset-lg-1">
          <div class="banner-main-form">
            <div class="banner-from">
              <form action="backend/action/action.php" method="POST" class="form-get-quote" id="contactform" cr-attached="true">
                <div class="row gy-3">
                  <input type="hidden" name="type" value="formLong">
                  <h2 class="what">What <span class="clr-changed ">service </span>are you looking for?</h2>
                  <div class="col-lg-12 col-lg-12 d-flex justify-content-between flex-wrap">
                    <div class="check-parent">
                      <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]"
                          value="Ghost Writing" id="service12"><label class="form-check-label " for="service12">Ghost
                          Writing</label></div>
                      <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]"
                          value="Book Publishing" id="service21"><label class="form-check-label " for="service21">Book
                          Publishing</label></div>
                    </div>
                    <div class="check-parent">
                      <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]"
                          value="Book Marketing" id="service31"><label class="form-check-label " for="service31">Book
                          Marketing</label></div>
                      <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]"
                          value="Book Editing" id="service41"><label class="form-check-label " for="service41">Book
                          Editing</label></div>
                    </div>
                    <div class="check-parent">
                      <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]"
                          value="Illustration Services" id="service51"><label class="form-check-label "
                          for="service51">Illustration Services</label></div>
                      <div class="form-check"><input class="form-check-input" type="checkbox" name="services[]"
                          value="Book Printing" id="service61"><label class="form-check-label "
                          for="service61">Book Printing</label></div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group"><input class="form-control" name="full_name" placeholder="Full Name" required=""
                        minlength="3"></div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group"><input class="form-control" type="email" name="email"
                        placeholder="Email Address" required=""></div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group"><input class="form-control" type="tel" name="phone_no"
                        placeholder="Phone Number" required="" minlength="12" maxlength="12" 
                        oninput="formatPhone(this)"></div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group"><select name="manuscript" id="manscript" class="form-select"
                        aria-label="Manuscript ?" required="">
                        <option value="" disabled="" selected="">Do You Have a Completed Manuscript?</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        <option value="In Progress">In Progress</option>
                      </select></div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group"><select name="genre" id="genre" class="form-select"
                        aria-label="Choose a Genre" required="">
                        <option value="" disabled="" selected="">What Genre Is Your Book?</option>
                        <option value="Ghost Writing">Ghost
                          Writing</option>
                        <option value="Book Publishing">Book
                          Publishing</option>
                        <option value="Book Marketing">Book
                          Marketing</option>
                        <option value="Book Editing">Book
                          Editing</option>
                        <option value="Book Printing">Book
                          Printing</option>
                        <option value="Book Video Trailer">Book
                          Video Trailer</option>
                        <option value="Web design & SEO">Web design & SEO</option>
                        <option value="Illustration Services">Illustration Services</option>
                        <option value="Articles Services">Articles Services</option>
                        <option value="Book Design Services">Book Design Services</option>
                        <option value="Blog Writing Services">Blog Writing Services</option>
                        <option value="Web Content Writing
                          Service">Web Content Writing
                          Service</option>
                      </select></div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group"><textarea name="message" class="form-control" placeholder="Message"
                        required=""></textarea></div>
                  </div>
                  <div class="col-lg-12 text-center text-md-start w-100 form-box1 ">
                    <button type="submit" class="btn btn-primary web-blue-btn w-100">submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>