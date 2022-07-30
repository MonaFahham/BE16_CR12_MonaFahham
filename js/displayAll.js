let btn = document.getElementById("display_reduced_price");
btn.addEventListener("click", reducedPrice, false);

function reducedPrice() {
    const ajReq = new XMLHttpRequest();
    let content = document.getElementById("result");
    ajReq.open("GET", "displayAll.php", true);
    ajReq.onload = function() {
        if (this.status == 200) {
            const real_estates = JSON.parse(ajReq.responseText);
            content.innerHTML = "";
            for (const real_estate of real_estates.data) {
                if (real_estate.price_reduction === "Yes") {
                    content.innerHTML += `
                    <div class='container col-lg-4 col-md-6 col-sm-12 justify-content-center d-flex' style='padding-bottom: 2rem;'>
                            <div class='card shadow border-0' data-aos='fade-up' data-aos-offset='300'    
                                data-aos-easing='ease-in-sine' style='width: 100%;'>
                                  <img class='image-size' src='./pictures/${real_estate.picture}' style='height: 300px; padding: 0.2rem; background-size: cover;'>
                                <div class='card-body'>
                                 <h3 class='card-text m-0'>${real_estate.advert_title}</h3>
                                 <h5 class='card-title text-center'></strong><strong>City: </strong> ${real_estate.city}</h5>
                                 <p class='card-text m-0'><strong>Size: </strong>${real_estate.size} m²</p>
                                 <p class='card-text m-0'><strong>Number of Rooms: </strong>${real_estate.room_number}</p>
                                 <p class='card-text m-0'><strong>Price: </strong>${real_estate.price}</p>
                                 <p class='card-text m-0'><strong>Price Reduction: </strong>${real_estate.price_reduction}</p>
                                </div>
                             </div>
                    </div>`;
                }
            }
        }
    };
    ajReq.send();
}

{
    /* <div class ='col-xl-3 col-lg-4 col-md-6 mb-4'>
                                                                                                                                                                                                      <div class ='bg-wight rounded shadow-lg p-3 bgcard' style ='mh-100'>
                                                                                                                                                                                                          <img src='./pictures/${real_estate.picture}' class = 'card-img-top' alt ='Picture not found' style='width: 20vw;'>
                                                                                                                                                                                                              <div class ='bgtitle'>
                                                                                                                                                                                                              <h5 class ='card-title text-light text-center p-2 mb-2'> ${real_estate.advert_title} 
                                                                                                                                                                                                              </h5>
                                                                                                                                                                                                              </div>
                                                                                                                                                                                                          <div class='card-body'>
                                                                                                                                                                                                              <p class='card-text m-0'><strong> Size: </strong> ${real_estate.size}
                                                                                                                                                                                                              </p>
                                                                                                                                                                                                              <p class='card-text m-0' > <strong> Number of Rooms: </strong>${real_estate.room_number}</p>
                                                                                                                                                                                                              <p class='card-text m-0'><strong> City: </strong> ${real_estate.city}</p>
                                                                                                                                                                                                              <p class='card-text m-0'><strong> Price: </strong>${real_estate.price}</p>
                                                                                                                                                                                                              <p class='card-text m-0'><strong> Price Reduction: </strong>${real_estate.price_reduction}
                                                                                                                                                                                                              </p>
                                                                                                                                                                                                          </div>
                                                                                                                                                                                                      </div>
                                                                                                                                                                                                  </div> */
}