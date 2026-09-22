'use client'; // Diz ao Next.js que esta página tem botões interativos
import { useState } from 'react';

export default function QuestaoCompleta({ dados }) {
  // Criamos os "estados" para controlar o que aparece na tela
  const [mostrarDica, setMostrarDica] = useState(false);
  const [opcaoSelecionada, setOpcaoSelecionada] = useState(null);
  const [mostrarGabarito, setMostrarGabarito] = useState(false);
  const [abaResolucao, setAbaResolucao] = useState('curta'); // curta, completa, video
  const [videoFormato, setVideoFormato] = useState('horizontal'); // horizontal, vertical

  const lidarComResposta = () => {
    if (opcaoSelecionada !== null) {
      setMostrarGabarito(true);
    }
  };

  return (
    <div className="bg-white rounded-xl border border-slate-200 shadow-md p-6 max-w-4xl mx-auto my-8 font-sans">
      
      {/* HEADER DA QUESTÃO */}
      <header className="border-b border-slate-100 pb-4 mb-4">
        <span className="bg-amber-500 text-white font-bold px-3 py-1 rounded text-sm mr-2">
          {dados.vestibular}
        </span>
        <span className="text-slate-500 text-sm font-medium">{dados.subtitulo}</span>
      </header>

      {/* ENUNCIADO E IMAGEM */}
      <section className="space-y-4">
        <p className="text-slate-800 text-lg leading-relaxed">{dados.enunciado}</p>
        
        <figure className="bg-slate-50 p-4 rounded-lg text-center border border-slate-100">
          <img src={dados.imagem.src} alt={dados.imagem.alt} className="mx-auto rounded max-h-60" />
          <figcaption className="text-xs text-slate-400 mt-2">{dados.imagem.legenda}</figcaption>
        </figure>

        <p className="text-slate-800 font-semibold text-lg">
          Na prática, à medida que se{" "}
          <span 
            className="text-blue-600 underline cursor-pointer hover:text-blue-800"
            onClick={() => setMostrarDica(true)}
          >
            aumenta o comprimento do barbante
          </span>
          , ocorre a redução de qual característica da onda sonora?
        </p>
      </section>

      {/* BOX DE DICA */}
      {mostrarDica && (
        <div className="bg-amber-50 border border-amber-200 p-4 rounded-lg my-4 flex justify-between items-center animate-fade-in">
          <p className="text-amber-800 m-0">💡 {dados.dica}</p>
          <button 
            onClick={() => setMostrarDica(false)}
            className="bg-amber-200 hover:bg-amber-300 text-amber-900 font-bold px-3 py-1 rounded text-sm transition"
          >
            Fechar
          </button>
        </div>
      )}

      {/* ALTERNATIVAS */}
      <section className="my-6 space-y-2">
        {dados.alternativas.map((alt, index) => (
          <label 
            key={index}
            className={`flex items-center p-3 rounded-lg border-2 cursor-pointer transition ${
              opcaoSelecionada === alt.id 
                ? 'border-blue-600 bg-blue-50 text-blue-900' 
                : 'border-slate-200 bg-slate-50 hover:bg-slate-100 text-slate-700'
            }`}
          >
            <input 
              type="radio" 
              name="alternativas" 
              value={alt.id}
              checked={opcaoSelecionada === alt.id}
              onChange={() => setOpcaoSelecionada(alt.id)}
              className="mr-3 w-4 h-4 text-blue-600"
            />
            {alt.texto}
          </label>
        ))}
      </section>

      <button 
        onClick={lidarComResposta}
        className="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition shadow-sm mb-6"
      >
        Responder
      </button>

      {/* SEÇÃO DE GABARITO E RESOLUÇÕES */}
      {mostrarGabarito && (
        <section className="border-t border-slate-200 pt-6 mt-6 animate-fade-in">
          <div className="mb-4 p-4 rounded-lg font-bold text-center text-lg bg-slate-100 text-slate-800">
            {dados.alternativas.find(a => a.id === opcaoSelecionada)?.correta 
              ? "🎉 Resposta Correta!" 
              : "❌ Resposta Incorreta! Tente analisar as resoluções abaixo."}
          </div>

          {/* ABAS DE RESOLUÇÃO */}
          <div className="flex border-b border-slate-200 mb-4">
            {['curta', 'completa', 'video'].map((tab) => (
              <button
                key={tab}
                onClick={() => setAbaResolucao(tab)}
                className={`flex-1 py-2 text-center font-semibold capitalize transition border-b-2 ${
                  abaResolucao === tab 
                    ? 'border-blue-600 text-blue-600' 
                    : 'border-transparent text-slate-500 hover:text-slate-800'
                }`}
              >
                Resposta {tab === 'video' ? 'em Vídeo' : tab}
              </button>
            ))}
          </div>

          {/* CONTEÚDO DAS ABAS */}
          <div className="bg-slate-50 p-4 rounded-lg text-slate-700 leading-relaxed">
            {abaResolucao === 'curta' && <p className="whitespace-pre-line">{dados.resoluções.curta}</p>}
            
            {abaResolucao === 'completa' && (
              <div>
                <p className="whitespace-pre-line">{dados.resoluções.completa}</p>
                {/* Aqui futuramente injetamos o componente de LaTeX nativo para a fórmula */}
                <div className="bg-white p-4 border rounded my-2 text-center font-serif text-xl">
                  $$v = \lambda \cdot f$$
                </div>
              </div>
            )}

            {abaResolucao === 'video' && (
              <div className="space-y-4">
                <div className="flex justify-center gap-2 mb-2">
                  <button 
                    onClick={() => setVideoFormato('horizontal')}
                    className={`px-3 py-1 text-sm rounded ${videoFormato === 'horizontal' ? 'bg-slate-800 text-white' : 'bg-slate-200'}`}
                  >
                    Horizontal
                  </button>
                  <button 
                    onClick={() => setVideoFormato('vertical')}
                    className={`px-3 py-1 text-sm rounded ${videoFormato === 'vertical' ? 'bg-slate-800 text-white' : 'bg-slate-200'}`}
                  >
                    Vertical
                  </button>
                </div>
                <div className="aspect-video w-full max-w-xl mx-auto">
                  <iframe 
                    className="w-full h-full rounded-lg"
                    src={videoFormato === 'horizontal' ? dados.resoluções.videoHorizontal : dados.resoluções.videoVertical}
                    title="Resolução em Vídeo"
                    allowFullScreen
                  />
                </div>
              </div>
            )}
          </div>
        </section>
      )}
    </div>
  );
}