<template>
  <section id="contacts">
    <h1>Contacts</h1>
    <div class="card">
      <div
        class="
          card-header
          d-flex
          justify-content-between
          align-items-center
          py-5
        "
      >
        <div class="h4">
          Nome Azienda: <strong>{{ title }}</strong>
        </div>
        <div>
          <img
            src="https://www.freepngdesign.com/content/uploads/images/3d-letter-b-6679.png"
            width="100"
            class="img-fluid"
            alt="Boolpress"
          />
        </div>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <h6 class="card-subtitle my-2 text-muted">Boolpress - Web</h6>
        </li>
        <li class="list-group-item">
          <p class="card-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Exercitationem eligendi, expedita veritatis doloribus, reprehenderit
            perspiciatis cum quisquam ullam incidunt commodi repudiandae quidem
            consequuntur porro, aliquam tempore quibusdam? Asperiores, aperiam
            molestiae? Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Corrupti asperiores laborum doloremque, perferendis aliquam commodi
            voluptates incidunt. Placeat dignissimos maxime saepe eius quos
            perspiciatis. Eos quis hic blanditiis sequi quidem. Lorem ipsum
            dolor sit amet consectetur adipisicing elit. Perferendis, alias quam
            sapiente exercitationem at saepe animi veniam natus cupiditate amet
            id laboriosam quia est eius dolorum, dicta molestiae eos
            consectetur!
          </p>
        </li>
        <li class="list-group-item">
          <address class="my-2">
            Phone Number: <strong>+39 3899403321</strong>
          </address>
        </li>
      </ul>
    </div>
  </section>
</template>

<script>
export default {
  name: "ContactPage",
  data() {
    return {
      title: "Boolpress",
    };
  },
};
</script>

<style>
</style>