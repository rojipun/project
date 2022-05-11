
let dateOfbirth = document.querySelector("input[type='date']");
const findZodiac = (event) => {
  event.preventDefault();
  dateOfbirth = new Date(dateOfbirth.value);
  const month = dateOfbirth.getMonth();
  const day = dateOfbirth.getDate();
  let zodiacSign = "";
  let zodiacDate = "";
    if((month === 0 && day >=20)|| (month ===1 && day <= 18)){
        zodiacSign ="Aquarius";
        zodiacDate ="January 20th -Febraury 18th";
    } else if ((month === 1 && day >= 19) || (month === 2 && day <= 20)) {
        zodiacSign = "Pisces";
        zodiacDate = "February 19th — March 20th";
      } else if ((month === 2 && day >= 21) || (month === 3 && day <= 19)) {
        zodiacSign = "Aries";
        zodiacDate = "March 21 — April 19th";
      } else if ((month === 3 && day >= 20) || (month === 4 && day <= 20)) {
        zodiacSign = "Taurus";
        zodiacDate = "April 20th — May 20th";
      } else if ((month === 4 && day >= 21) || (month === 5 && day <= 20)) {
        zodiacSign = "Gemini";
        zodiacDate = "May 21 — June 20th";
      } else if ((month === 5 && day >= 21) || (month === 6 && day <= 22)) {
        zodiacSign = "Cancer";
        zodiacDate = "June 21 —July 22";
      } else if ((month === 6 && day >= 23) || (month === 7 && day <= 22)) {
        zodiacSign = "Leo";
        zodiacDate = "July 23rd — August 22";
      } else if ((month === 7 && day >= 23) || (month === 8 && day <= 22)) {
        zodiacSign = "Virgo";
        zodiacDate = "August 23 — September 22nd";
      } else if ((month === 8 && day >= 23) || (month === 9 && day <= 22)) {
        zodiacSign = "Libra";
        zodiacDate = "September 23 — October 22";
      } else if ((month === 9 && day >= 23) || (month === 10 && day <= 21)) {
        zodiacSign = "Scorpio";
        zodiacDate = "October 23rd — November 21";
      } else if ((month === 10 && day >= 22) || (month === 11 && day <= 21)) {
        zodiacSign = "Sagittarius";
        zodiacDate = "November 22 — December 21";
      } else if ((month === 11 && day >= 22) || (month === 0 && day <= 19)) {
        zodiacSign = "Capricorn";
        zodiacDate = "December 22nd — January 19th";
      }
  
      console.log(zodiacSign,zodiacDate);
       sessionStorage.setItem("zodiacSign", zodiacSign);
       sessionStorage.setItem("zodiacDate", zodiacDate);
       location.href = "./result.html";
    
};

