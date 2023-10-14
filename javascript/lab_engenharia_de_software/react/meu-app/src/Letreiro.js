import React, { useState, useEffect } from 'react';

function Elemento() {
  const [agora, setAgora] = useState('');
  const now = "Conheça a Fatec!";
  let index = 0;

  useEffect(() => {
    function tick() {
      if (index <= now.length) {
        setAgora(now.substring(0, index));
        index++;
      } else {
        index = 0;
      }
    }

    const tempo = setInterval(tick, 1000);

    return () => clearInterval(tempo);
  }, []);

  return (
    <div>
      <h1>{agora}</h1>
    </div>
  );
}

export default Elemento;