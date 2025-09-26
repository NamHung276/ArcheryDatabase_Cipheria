document.addEventListener("DOMContentLoaded", () => {
  const ageInput = document.getElementById("age");
  const genderInput = document.getElementById("gender");
  const categorySelect = document.getElementById("category");
  const divisionSelect = document.getElementById("division");
  const dateInput = document.getElementById("date");

  // Default date = today
  const today = new Date().toISOString().split("T")[0];
  dateInput.value = today;

  // 🔹 Decide category key
  function detectCategoryKey(age, gender) {
    if (!age || !gender) return "";

    if (age >= 70) return `70_${gender}`;
    if (age >= 60) return `60_${gender}`;
    if (age >= 50) return `50_${gender}`;
    if (age >= 21) return `${gender}_open`;
    if (age >= 18) return `under21_${gender}`;
    if (age >= 16) return `under18_${gender}`;
    if (age >= 14) return `under16_${gender}`;
    return `under14_${gender}`;
  }

  // 🔹 Update Category when age/gender changes
  function updateFields() {
    const age = parseInt(ageInput.value, 10);
    const gender = genderInput.value.toLowerCase();

    const categoryKey = detectCategoryKey(age, gender);
    if (categoryKey) {
      categorySelect.value = categoryKey;
    }
  }

  ageInput.addEventListener("input", updateFields);
  genderInput.addEventListener("change", updateFields);

  // 🔹 Save + redirect
  document.getElementById("archeryForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const firstName = document.getElementById("firstName").value;
    const middleName = document.getElementById("middleName").value;
    const lastName = document.getElementById("lastName").value;
    const age = ageInput.value;
    const gender = genderInput.value;
    const club = document.getElementById("club").value;
    const date = dateInput.value;
    const round = document.getElementById("round").value;
    const distance = document.getElementById("distance").value;
    const target = document.getElementById("target").value;
    const category = categorySelect.options[categorySelect.selectedIndex].text;
    const division = divisionSelect.options[divisionSelect.selectedIndex].text;

    const fullName = middleName ? `${firstName} ${middleName} ${lastName}` : `${firstName} ${lastName}`;

    localStorage.setItem("archeryFormData", JSON.stringify({
      fullName,
      age,
      gender,
      club,
      date,
      round,
      distance,
      target,
      category,
      division
    }));

    window.location.href = "check.html";
  });
});
