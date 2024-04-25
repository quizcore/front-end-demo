/*!
 * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
 * Copyright 2011-2024 The Bootstrap Authors
 * Licensed under the Creative Commons Attribution 3.0 Unported License.
 */

(() => {
  'use strict'

  const getStoredTheme = () => localStorage.getItem('theme')
  const setStoredTheme = theme => localStorage.setItem('theme', theme)

  const getPreferredTheme = () => {
    const storedTheme = getStoredTheme()
    if (storedTheme) {
      return storedTheme
    }

    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
  }
  
//getLocalSunsetTime start
const getLocalSunsetTime = () => {
  return new Promise((resolve, reject) => {
      const geoSuccess = (position) => {
          const { latitude, longitude } = position.coords;
          const date = new Date();
          const formattedDate = `${date.getFullYear()}-${(date.getMonth() + 1).toString().padStart(2, '0')}-${date.getDate().toString().padStart(2, '0')}`;

          fetch(`https://api.sunrisesunset.io/json?lat=${latitude}&lng=${longitude}&timezone=America/Los_Angeles&date=${formattedDate}`)
          //https://api.sunrisesunset.io/json?lat=38.907192&lng=-77.036873&timezone=UTC&date=1990-05-22
              .then(response => response.json())
              .then(data => {
                  const sunsetTime = data.results.sunset;
                  console.log('sunsetTime:', sunsetTime);
                  // Split the sunset time into hours and minutes
                  const [hourStr, minuteStr] = sunsetTime.split(':');
                  let sunsetHour = parseInt(hourStr); // Extract hour value
                  const minutes = parseInt(minuteStr); // Extract minute value
                  
                  // Adjust sunsetHour if it's PM (afternoon)
                  if (sunsetTime.includes('PM') && sunsetHour !== 12) {
                      sunsetHour += 12;
                  }
                  
                  console.log('sunsetHour:', sunsetHour);
                  console.log('current hours:', date.getHours());
                  if (!isNaN(sunsetHour)) {
                      resolve(sunsetHour);
                  } else {
                      reject('Invalid sunset time');
                  }
              })
              .catch(error => reject(error));
      };

      const geoError = (error) => {
          reject(error);
      };

      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(geoSuccess, geoError);
      } else {
          reject('Geolocation is not supported by this browser.');
      }
  });
};
//getLocalSunsetTime end

//getLocalSunriseTime start
const getLocalSunriseTime = () => {
  return new Promise((resolve, reject) => {
      const geoSuccess = (position) => {
          const { latitude, longitude } = position.coords;
          const date = new Date();
          const formattedDate = `${date.getFullYear()}-${(date.getMonth() + 1).toString().padStart(2, '0')}-${date.getDate().toString().padStart(2, '0')}`;

          fetch(`https://api.sunrisesunset.io/json?lat=${latitude}&lng=${longitude}&timezone=America/Los_Angeles&date=${formattedDate}`)
              .then(response => response.json())
              .then(data => {
                  const sunriseTime = data.results.sunrise;
                  console.log('sunriseTime:', sunriseTime);
                  const sunriseHour = parseInt(sunriseTime.split(':')[0]);
                  console.log('sunriseHour:', sunriseHour);
                  console.log('current hours:', date.getHours());
                  if (!isNaN(sunriseHour)) {
                      resolve(sunriseHour);
                  } else {
                      reject('Invalid sunrise time');
                  }
              })
              .catch(error => reject(error));
      };

      const geoError = (error) => {
          reject(error);
      };

      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(geoSuccess, geoError);
      } else {
          reject('Geolocation is not supported by this browser.');
      }
  });
};
//getLocalSunriseTime end

const setTheme = theme => {
  const signUpBtn = document.getElementById('signUpBtn');

  if (signUpBtn) {
    if (theme === 'dark') {
        signUpBtn.classList.add('btn-outline-danger');
    } else {
        signUpBtn.classList.remove('btn-outline-danger');
    }
  }

  if (theme === 'auto') {
      Promise.all([getLocalSunsetTime(), getLocalSunriseTime()]).then(([sunsetHour, sunriseHour]) => {
          const currentHour = new Date().getHours();

          if ((currentHour >= sunsetHour || currentHour < sunriseHour)) {
              
              if (signUpBtn) {
                  signUpBtn.classList.add('btn-outline-danger');
              }
              document.documentElement.setAttribute('data-bs-theme', 'dark');
          } else {
              
              if (signUpBtn) {
                  signUpBtn.classList.remove('btn-outline-danger');
              }
              document.documentElement.setAttribute('data-bs-theme', 'light');
          }
      }).catch(error => {
          console.error('Error fetching sunrise/sunset time:', error);
      });
  } else {
      document.documentElement.setAttribute('data-bs-theme', theme);
      if (signUpBtn) {
          if (theme === 'dark') {
              signUpBtn.classList.add('btn-outline-danger');
          } else {
              signUpBtn.classList.remove('btn-outline-danger');
          }
      }
  }

}


  setTheme(getPreferredTheme())

  const showActiveTheme = (theme, focus = false) => {
    const themeSwitcher = document.querySelector('#bd-theme')

    if (!themeSwitcher) {
      return
    }

    const themeSwitcherText = document.querySelector('#bd-theme-text')
    const activeThemeIcon = document.querySelector('.theme-icon-active use')
    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
    const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')

    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
      element.classList.remove('active')
      element.setAttribute('aria-pressed', 'false')
    })

    btnToActive.classList.add('active')
    btnToActive.setAttribute('aria-pressed', 'true')
    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
    const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
    themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

    if (focus) {
      themeSwitcher.focus()
    }
  }

  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    const storedTheme = getStoredTheme()
    if (storedTheme !== 'light' && storedTheme !== 'dark') {
      setTheme(getPreferredTheme())
    }
  })

  window.addEventListener('DOMContentLoaded', () => {
    const signUpBtn = document.getElementById('signUpBtn');

    showActiveTheme(getPreferredTheme())

    if (signUpBtn) {
      if (getPreferredTheme() === 'dark') {
        signUpBtn.classList.add('btn-outline-danger');
      } else {
        signUpBtn.classList.remove('btn-outline-danger');
      }
    }

    document.querySelectorAll('[data-bs-theme-value]')
      .forEach(toggle => {
        toggle.addEventListener('click', () => {
          const theme = toggle.getAttribute('data-bs-theme-value')
          setStoredTheme(theme)
          setTheme(theme)
          showActiveTheme(theme, true)
        })
      })
  })
})()






