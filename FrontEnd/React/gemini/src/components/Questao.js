// Isso é um componente reutilizável!
export default function Questao() {
  return (
    <div className="border-2 border-blue-200 rounded-lg p-6 my-4 bg-blue-50/50 shadow-sm">
      <span className="bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded">
        FUVEST
      </span>
      
      <p className="text-gray-800 font-medium my-3">
        (Física - Mecânica) Um automóvel mantém uma velocidade constante de 20 m/s. 
        Qual a distância percorrida por ele em um intervalo de tempo de 10 segundos?
      </p>

      {/* Opções da Questão */}
      <div className="space-y-2">
        <button className="w-full text-left p-2 rounded border bg-white hover:bg-blue-100 transition">a) 2 metros</button>
        <button className="w-full text-left p-2 rounded border bg-white hover:bg-blue-100 transition">b) 200 metros</button>
        <button className="w-full text-left p-2 rounded border bg-white hover:bg-blue-100 transition">c) 0,5 metros</button>
      </div>
    </div>
  );
}