<div class="modal" id="inserting">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Upload Music</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
          <form action="/insert" method="post">
            <!-- <p id="modalData"></p> -->
            <input type="hidden" id="id" name="id">
            <input type="File" name="File" required>
            <label>Artist:</label>
            <input type="text" name="Artist" placeholder="Artist" required>
            <label>Title:</label>
            <input type="text" name="Title" placeholder="MusicTitle" required>
            <button type="submit" class="btn btn-success" name="insert">Insert</button>
          </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>