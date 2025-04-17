import dynamic from 'next/dynamic';
const CVBuilder = dynamic(() => import('../components/CVBuilder'), { ssr: false });
export default function Home() {
  return <CVBuilder />;
}
