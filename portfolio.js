$(".project-list").on("click", ".projectDetailsBtn", async function () {
    try {
      const projectId = $(this).attr("projectId");
      const modalBody = $(".modal-loaded-content");
      $('#loading-img').show();
      
      modalBody.empty();
      $("#projectDetailsModal").modal("show");
      const projectDetails = await fetchProjectDetails(projectId);
      if (projectDetails) {
        $('#loading-img').hide();
        modalBody.empty();
        displayProjectDetails(projectDetails);
      } else {
        console.error("Project details not found");
      }
    } catch (error) {
      console.error("Error:", error);
    }
  });

  async function fetchProjectDetails(projectId) {
    const response = await fetch("./assets/data/projects.json");
    if (!response.ok) {
      throw new Error("Network response was not ok");
    }
    const data = await response.json();
    return data.find((item) => item.id === projectId) || null;
  }

  function displayProjectDetails(projectDetails) {
    const { title, thumbnail, short_description, appStore, playStore, login, description_images, long_description } = projectDetails || {};

    const modalBody = $("#projectDetailsModal .modal-body");
    modalBody.empty();

    const htmlContent = `
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h1 class="text-dark">${title || ''}</h1>
            <img src="${thumbnail || ''}" alt="Project Thumbnail" class="w-100">
            <p class="text-dark">${short_description || ''}</p>
            <h2 class="text-dark">Download</h2>
            <h6 class="text-dark d-flex gap-2"><a href="${appStore || ''}">App Store</a></h6>
            <h6 class="text-dark d-flex gap-2"><a c href="${playStore || ''}">Play Store</a></h6>
            <hr />
            ${renderLoginInfo(login)}
            ${renderDescriptionImages(description_images)}
            <p class="text-dark">${long_description || ''}</p>
          </div>
        </div>
      </div>
    `;

    modalBody.html(htmlContent);
  }

  function renderLoginInfo(login) {
    if (!login || !Array.isArray(login)) return '';
    return login
      .map((row) => `
        <h2 class="text-dark">${row.type || ''}</h2>
        <p class="text-dark mb-0"><strong>Email:</strong> ${row.email || ''}</p>
        <p class="text-dark"><strong>Password:</strong> ${row.password || ''}</p>
      `)
      .join('');
  }

  function renderDescriptionImages(description_images) {
    if (!description_images || !Array.isArray(description_images)) return '';
    return description_images
      .map((row) => `<img src="${row.img || ''}" alt="Description Image" class="w-100">`)
      .join('');
  }

