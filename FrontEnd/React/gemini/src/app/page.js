import QuestaoCompleta from "@/components/QuestaoCompleta";
// Importamos as duas questões agora:
import { questaoEnem, questaoEnem92 } from "@/components/dadosQuestao";

export default function Home() {
  return (
    <main className="min-h-screen bg-slate-100 py-6 space-y-8">
      
      {/* Primeira Questão (A que você já tinha) */}
      <QuestaoCompleta dados={questaoEnem} />
      
      {/* Segunda Questão (A nova!) */}
      <QuestaoCompleta dados={questaoEnem92} />
      
    </main>
  );
}