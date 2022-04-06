<template>
  <section id="contacts">
    <section id="form">
      <h1>Contattaci</h1>
      <div class="row d-flex">
        <div class="col-8">
          <div class="form-group">
            <div>
              <label for="message">Inserisci qui il tuo messaggio: </label>
            </div>
            <div>
              <textarea
                class="form-control shadow"
                id="message"
                rows="5"
              ></textarea>
              <small class="form-text text-muted"
                >Inserisci qui il tuo messaggio.</small
              >
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="form-group">
            <div>
              <label for="email" class="mb-3 mr-3"
                >Inserisci la tua email:</label
              >
            </div>
            <div>
              <input
                type="email"
                class="form-control shadow"
                id="email"
                placeholder="nome@esempio.com"
              />
              <small class="form-text text-muted"
                >Inserisci qui la tua email. Non condivideremo la tua email con
                nessuno. Verrà utilizzata per ricontattarti.</small
              >
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <button class="btn btn-success w-100 shadow">Invia</button>
          </div>
        </div>
      </div>
    </section>

    <hr />

    <div class="card mt-5 shadow">
      <div
        class="
          card-header
          d-flex
          justify-content-between
          align-items-center
          py-3
        "
      >
        <div class="h4 pt-3">
          <div>Nome Azienda:</div>
          <div>
            <strong>{{ title }}</strong>
          </div>
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